<?php
namespace App\Models;

use CodeIgniter\Model;

class Catalogo extends Model
{
    protected $table = 'productosmascotas';
    protected $primaryKey = 'id_producto';
    protected $allowedFields = ['nombre', 'categoria', 'marca', 'precio', 'stock','Fecha Registro'];
}
     