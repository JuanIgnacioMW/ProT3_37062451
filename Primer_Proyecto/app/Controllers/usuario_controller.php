<?php
namespace App\Controllers;
Use App\Models\usuario_model;
use CodeIgniter\Controller;

class usuario_controller extends Controller{

    public function _construct(){
        helper(['form', 'url']); /* helper es una biblioteca de Code*/
    }

    public function create(){

        $data['titulo']= 'Registro';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');    
        echo view('Back/usuario/registro');
        echo view('front/footer_view');
    }
    public function formValidation(){
        
        $input = $this->validate ([
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'usuario' => 'required|min_length[3]',
            'email' => 'required|min_length[4]|max_length[100]',
            'pass' => 'required|min_length[3]|max_length[10]'
        ],
    );
    $formModel = new usuario_model();

    if (!$input){
        $data['titulo']= 'Registro';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('Back/usuario/registro',['validation' => $this->validator]);
        echo view('front/footer_view');
    }else {
       $formModel->save([
        'nombre' => $this -> request->getVar ('nombre'),
        'apellido' => $this -> request->getVar ('apellido'),
        'usuario' => $this -> request->getVar ('usuario'),
        'email' => $this -> request->getVar ('email'),
        'pass' => password_hash ($this -> request->getVar ('pass'), PASSWORD_DEFAULT)
      //password_hash() crea un nuevo hash de cntraseña usando un algoritmo de
      //hash de unico sentido.
    
    ]); 
    // Flashdata funiona solo en redirigir la funcion en el controlador
    //en la vista de carga.
    session()->setFlashdata('success', 'Usuario registrado con exito');
    return $this->response->redirect('/loguin');
    }

    }

    public function update($id)
    {
    $formModel = new usuario_model();
        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'usuario' => $this->request->getPost('usuario'),
            'email' => $this->request->getPost('email'),
            'pass' => password_hash($this->request->getPost('pass'), PASSWORD_DEFAULT),
            'perfil_id' => $this->request->getPost('perfil_id'),
            'baja' => $this->request->getPost('baja')
        ];
        $formModel->update($id, $data);
        return redirect()->to('/usuario_logueado');
    }
}