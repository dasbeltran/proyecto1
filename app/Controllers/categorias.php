<?php namespace App\Controllers;
use App\Models\categoriasModel;

class categorias extends BaseController{

    public function index(){
        $categorias = new categoriasModel();
        $datos=[
            'listados'=>$categorias->asObject()->paginate(5),
            'pager'=>$categorias->pager
        ];

        $this->cargaporDefecto('Lista de categorias',$datos,'index');
    }

    public function new(){
        $categorias = new categoriasModel();
        $validation =  \Config\Services::validation();
        $this->cargaporDefecto('Crear categoria',['categorias'=> new categoriasModel(),'validation'=>$validation],'new');
    }

    public function create(){
        $categorias = new categoriasModel();
        if ($this->validate('categorias')) {
            $categorias->save([
                'descripcion'=>$this->request->getVar('descripcion')
            ]);
            return redirect()->to('/categorias')->with('mensage', 'Datos guardados correctamente');
        }else{
            $validation =  \Config\Services::validation();
            $this->cargaporDefecto('Crear categoria',['categorias'=> new categoriasModel(),'validation'=>$validation],'new');
        }
    }

    public function delete($id_categoria = null){
        $categorias = new categoriasModel();
        $categorias->delete($id_categoria);
        return redirect()->to('/categorias')->with('mensage', 'Datos eliminados correctamente');
    }

    public function edit($id_categoria = null){
        $categorias = new categoriasModel();
        if ($categorias->Find($id_categoria) == null)
        {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        $validation =  \Config\Services::validation();
        $this->cargaporDefecto('Crear categoria',['categorias'=> $categorias->asObject()->find($id_categoria),'validation'=>$validation],'edit');
    }

    public function update($id_categoria = null){
        $categorias = new categoriasModel();

        if ($categorias->Find($id_categoria) == null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        if ($this->validate('categorias')) {
            $categorias->update($id_categoria,[
                'descripcion'=>$this->request->getVar('descripcion')
            ]);
            return redirect()->to('/categorias')->with('mensage', 'Datos guardados correctamente');
        }else{
            $validation =  \Config\Services::validation();
            $this->cargaporDefecto('Crear categoria',['categorias'=> $categorias->asObject()->find($id_categoria),'validation'=>$validation],'edit');
        }
    }
    
    private function cargaporDefecto($titulo,$data,$vista){
        $dataheader=[
            'titulo'=>$titulo
        ];
        echo view('dashboard/templates/header',$dataheader);
        echo view("dashboard/categorias/$vista",$data);
        echo view('dashboard/templates/footer');
    }

}

