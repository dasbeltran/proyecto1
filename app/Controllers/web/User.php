<?php

namespace App\Controllers\web;

use App\Controllers\BaseController;
use App\Models\UserModelo;
use \CodeIgniter\Exceptions\PageNotFoundException;

class User extends BaseController
{

    public function login()
    {
        //$session = \Config\Services::session();

        $this->loadDefaultView([], 'login');
        return $this->_redirectAuth();
    }

    public function login_post()
    {
        helper('user');
        $userModelo = new UserModelo();

        $emailUsername= $this->request->getPost('email');
        $password= $this->request->getPost('password');

        $user = $userModelo->select('id,username,email,password,type')->orWhere('email',$emailUsername)->orWhere('username',$emailUsername)->first();

        if (!$user) {
            
            return redirect()->back()->with('message','Usuario y/o contraseña incorrecta');
            return;
        }

        if (verifyPassword($password, $user['password'])) {
            unset($user['password']);
            $session = session();
            $session->set($user);
            return $this->_redirectAuth();
        }

        return redirect()->back()->with('message','Usuario y/o contraseña incorrecta');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to("/login");
    }

    private function _redirectAuth(){
        $session = session();
        if ($session-> type =="desarrollador") {
            return redirect()->to("/desarrollador")->with('message','Hola  '.$session->username);
        }
        else if($session->type=="administrador"){
            return redirect()->to("/administrador")->with('message',''.$session->username);
        }
        else if($session->type=="cliente"){
            return redirect()->to("/cliente")->with('message','Bienvenido'.$session->username);
        }
    }



    private function loadDefaultView($data, $view)
    {
        echo view("user/templates/header");
        echo view("user/control/$view", $data);
        echo view("user/templates/footer");
    }



}
