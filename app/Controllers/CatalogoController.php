<?php
namespace App\Controllers;

use App\Models\Catalogo;
class CatalogoController extends BaseController
{
    public function listar()
    {
        $model = new Catalogo();
        $data['productos'] = $model->findAll();
        return view('catalogo/listar', $data);
    }
    public function crear()
    {
        return view('catalogo/crear');
    }

    public function guardar(){
        $model = new Catalogo();

        //Manejo del archivo expediente
        $expediente = $this->request->getFile('expediente');
        if ($expediente && $expediente->isValid() && !$expediente->hasMoved()) {
            $newName = $expediente->getRandomName();
            $expediente->move(WRITEPATH . 'uploads', $newName);
            $data['expediente'] = $newName;
        } else {
            $data['expediente'] = null; // O manejar el error según sea necesario
        }

        $data =[
            'nombre' => $this->request->getPost('nombre'),
            'categoria' => $this->request->getPost('categoria'),
            'marca' => $this->request->getPost('marca'),
            'precio' => $this->request->getPost('precio'),
            'expediente' => $this->request->getFile('expediente')
        ];
        return redirect()->to(base_url('catalogo/listar'));
    }
}