<?php
namespace App\Controllers;
use App\Controllers\BaseController;


class Administrador extends BaseController{

    public function index()
    {
        $this->loadDefaultView('index');
    }

    private function loadDefaultView()
    {
        echo view("administrador/templates/header");
        echo view("administrador/administrador/index");
        echo view("administrador/templates/footer");
    }

}
?>