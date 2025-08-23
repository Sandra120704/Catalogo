<?php
namespace App\Models;

use CodeIgniter\Model;

class Catalogo extends Model
{
    protected $table = 'productosmascota';
    protected $primaryKey = 'id_producto';
    protected $allowedFields = [
                'nombre',
                'categoria',
                'marca',
                'precio',
                'expediente' 
    ];
}
    

     