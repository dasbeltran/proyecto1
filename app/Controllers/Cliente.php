<?php
namespace App\Controllers;
use App\Controllers\BaseController;


class Cliente extends BaseController{

    public function index()
    {
        $this->loadDefaultView('index');
    }

    private function loadDefaultView()
    {
        echo view("cliente/templates/header");
        echo view("cliente/cliente/index");
        echo view("cliente/templates/footer");
    }

}
?>