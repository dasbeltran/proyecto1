<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModelo extends Model{

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields =['username','email','password','type'];

}