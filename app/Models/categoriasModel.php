<?php namespace App\Models;

use CodeIgniter\Model;

class categoriasModel extends Model
{
    protected $table      = 'categorias';
    protected $primaryKey = 'id_categoria';
    protected $allowedFields = ['descripcion'];
}