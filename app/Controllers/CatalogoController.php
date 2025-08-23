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
        $data['header'] = view('layouts/header');
        $data['footer'] = view('layouts/footer');

        return view('catalogo/crear', $data);
    }

    public function guardar()
    {
        $model = new Catalogo();

        // Manejo del archivo expediente
        $expediente = $this->request->getFile('expediente');
        $newName = null;

        if ($expediente && $expediente->isValid() && !$expediente->hasMoved()) {
            $newName = $expediente->getRandomName();
            $expediente->move(WRITEPATH . 'uploads', $newName);
        }

        // Datos del formulario
        $dataProducto = [
            'nombre'     => $this->request->getPost('nombre'),
            'categoria'  => $this->request->getPost('categoria'),
            'marca'      => $this->request->getPost('marca'),
            'precio'     => $this->request->getPost('precio'),
            'expediente' => $newName // Guardamos el nombre del archivo, no el objeto
        ];

        // Guardar en la base de datos
        $model->insert($dataProducto);

        return redirect()->to(base_url('catalogo/listar'));
    }
}
