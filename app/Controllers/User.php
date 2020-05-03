<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModelo;
use CodeIgniter\HTTP\Message;
use \CodeIgniter\Exceptions\PageNotFoundException;

class user extends BaseController
{

    public function index()
    {

        $user = new UserModelo();
        $data = [
            'users' => $user->asObject()->paginate(5),
            'pager' => $user->pager,
        ];

        $this->loadDefaultView('LISTADO DE USUARIOS', $data, 'index');
    }


    public function new()
    {
        $user = new UserModelo();

        $validation =  \Config\Services::validation();
        $this->loadDefaultView('CREAR USUARIO', ['validation' => $validation, 'user' => new UserModelo(),],'new');
    }


    public function create()
    {
        helper("user");
        $user = new UserModelo();

        if ($this->validate('users')) {

            $id = $user->insert([
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'password' =>hashPassword($this->request->getPost('password')) ,
                'type' => "cliente",
            ]);

            return redirect()->to("/login")->with('message', 'USUARIO CREADO');
        }

        return redirect()->back()->withInput();
    }


    public function edit($id = null)
    {
        $user = new UserModelo();

        if ($user->find($id) == null) {
            throw PageNotFoundException::forPageNotFound();
        }

        $validation = \Config\Services::validation();
        $this->loadDefaultView('ACTUALIZAR USUARIO',
        ['validation' => $validation, 'user' => $user->asObject()->find($id),],'edit');
    }


    public function update($id = null)
    {
        helper("user");
        $user = new UserModelo();

        if ($user->find($id) == null) {
            throw PageNotFoundException::forPageNotFound();
        }

        if ($this->validate('usersUpdate')) {
            $user->update($id, [
                 'password' =>hashPassword($this->request->getPost('password')) ,
            ]);

            return redirect()->to('/user')->with('message', 'USUARIO EDITADO CORRECTAMENTE');
        }

        return redirect()->back()->withInput();
    }


    
    public function delete($id = null)
    {
        $user = new UserModelo();

        if ($user->find($id) == null) {
            throw PageNotFoundException::forPageNotFound();
        }
        $user->delete($id);
        return redirect()->to('/user')->with('message', 'USUARIO ELIMINADO');
    }



    private function loadDefaultView($titulo, $data, $view)
    {

        echo view("desarrollador/templates/header");
        echo view("desarrollador/user/$view", $data);
    }



}
