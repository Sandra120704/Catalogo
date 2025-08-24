<?php
namespace App\Controllers;

use App\Models\Catalogo;

class CatalogoController extends BaseController
{
    public function listar()
    {
        $model = new Catalogo();

        $data['header'] = view('layouts/header');
        $data['footer'] = view('layouts/footer');
        $data['productos'] = $model->findAll();

        return view('catalogo/listar', $data);
    }

    public function crear()
    {
        $model = new Catalogo();

        $data['header'] = view('layouts/header');
        $data['footer'] = view('layouts/footer');



        return view('catalogo/crear', $data);
    }

    public function guardar()
    {
        $model = new Catalogo();

        // Manejo del archivo expediente
        $expediente = $this->request->getFile('expediente');
        $nombreArchivo = null;

        if ($expediente && $expediente->isValid() && !$expediente->hasMoved()) {
            $nombreArchivo = $expediente->getRandomName();
            $expediente->move(WRITEPATH . 'uploads', $nombreArchivo);
        }

        // Datos a insertar
        $data = [
            'nombre'    => $this->request->getPost('nombre'),
            'categoria' => $this->request->getPost('categoria'),
            'marca'     => $this->request->getPost('marca'),
            'precio'    => $this->request->getPost('precio'),
            'expediente'=> $nombreArchivo
        ];

        $model->insert($data);

        return redirect()->to(base_url('catalogo/listar'));
    }

    public function editar($id)
    {
        $model = new Catalogo();

        $data['header'] = view('layouts/header');
        $data['footer'] = view('layouts/footer');
        $data['producto'] = $model->find($id);

        return view('catalogo/editar', $data);
    }

    public function actualizar($id)
    {
        $model = new Catalogo();

        // Manejo del archivo expediente
        $expediente = $this->request->getFile('expediente');
        $producto = $model->find($id); // obtener el registro actual
        $nombreArchivo = $producto['expediente']; // mantener el anterior por defecto

        if ($expediente && $expediente->isValid() && !$expediente->hasMoved()) {
            $nombreArchivo = $expediente->getRandomName();
            $expediente->move(WRITEPATH . 'uploads', $nombreArchivo);
        }

        // Datos a actualizar
        $data = [
            'nombre'    => $this->request->getPost('nombre'),
            'categoria' => $this->request->getPost('categoria'),
            'marca'     => $this->request->getPost('marca'),
            'precio'    => $this->request->getPost('precio'),
            'expediente'=> $nombreArchivo
        ];

        $model->update($id, $data);

        return redirect()->to(base_url('catalogo/listar'));
    }

    public function eliminar($id)
    {
        $model = new Catalogo();
        $producto = $model->find($id);

        if($producto && $producto['expediente']){
            $filePath = WRITEPATH . 'uploads/' . $producto['expediente'];
            if(file_exists($filePath)){
                unlink($filePath);
            }

            $model->delete($id);
        }

        return redirect()->to(base_url('catalogo/listar'));
    }

}
