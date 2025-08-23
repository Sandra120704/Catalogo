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
}