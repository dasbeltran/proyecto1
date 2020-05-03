<?php
namespace App\Controllers;
use App\Controllers\BaseController;


class Desarrollador extends BaseController{

    public function index()
    {
        $this->loadDefaultView('index');
    }

    private function loadDefaultView()
    {
        echo view("desarrollador/templates/header");
        echo view("desarrollador/desarrollador/index");
        echo view("desarrollador/templates/footer");
    }

}
?>