<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='Pagina Principal'; 
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/Principal_CafeteriaNIPPON');
        echo view('front/footer');
    }


    public function funcion_AcercaDe()
    { 
        $data['titulo']='Acerca de'; 
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/AcercaDe');
               // echo view('front/Principal_CafeteriaNIPPON');
        echo view('front/footer');
    }


    public function funcion_loguin()
    {
         $data['titulo']='Loguin'; 
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('Back/usuario/loguin');
                //echo view('front/Principal_CafeteriaNIPPON');
        echo view('front/footer');
    }

    public function funcion_registracion()
    {
         $data['titulo']='Registro'; 
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('Back/usuario/registro');
        //echo view('front/registracion');
                //echo view('front/Principal_CafeteriaNIPPON');
        echo view('front/footer');
    }

    public function funcion_quienes_somos()
    {
         $data['titulo']='Quienes Somos'; 
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
                //echo view('front/Principal_CafeteriaNIPPON');
        echo view('front/footer');
    }


}
