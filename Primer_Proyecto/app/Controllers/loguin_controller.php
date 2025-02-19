<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\usuario_model;

class loguin_controller extends BaseController
{
    public function index()
    {
        helper (['form', 'url']);

        $data['titulo']='loguin';
        echo view ('front/head_view', $data);
        echo view ('front/navbar_view');
        echo view ('Back/usuario/loguin');
        echo view ('front/footer');
    }

    public function auth()
    {
        $session = session();
        $model = new usuario_model();

        //traemos los datos del formulario
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass');

        $data = $model->where('email', $email)->first();
        if($data){
             $pass = $data['pass'];
             $ba= $data['baja'];
                if($ba == 'SI'){
                     $session->setFlashdata('msg', 'usuario dado de baja');
                     return redirect()->to('/loguin_controller');
                   }
                 //Se verifican los datos ingresados para iniciar, si cumple las condiciones para iniciar sesion  
                 //Verificacion inicia la sesion
                  $verify_pass = password_verify($password, $pass);
                    //passsword_verify determina los requisitos de configuracion de la contraseña
                    if($verify_pass){
                          $ses_data = [
                              'id_usuario' => $data['id_usuario'],
                              'nombre' => $data['nombre'],
                              'apellido' => $data['apellido'],
                              'email' => $data['email'],
                              'usuario' => $data['usuario'],
                              'perfil_id' => $data['perfil_id'],
                              'logged_in' => TRUE
                           ];
                           //Se cumple la verificacion inicia la sesion
                         $session-> set($ses_data);

                         session()->setFlashdata('msg', 'Bienvenido!!');
                         return redirect()->to('/panel');
                         //return redirect()->to('/prueba');//pagina principal

                        }else{
                            //no paso la validacion de la password
                            $session->setFlashdata('msg', 'Password Incorrecta');
                            return redirec()->to('/loguin_controller');

                        }
                        
            }else{
                $session->setFlashdata('msg','No existe el email o es incorrecto');
                return redirect()->to('/loguin_controller');
                }
    }
    public function logout()
    {
        $session = session();
        $session -> destroy();
        return redirect()->to('/');
        
    }

}
