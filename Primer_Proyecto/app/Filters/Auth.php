<?php
namespace App\Filters;
 use CodeIgniter\HTTP\RequestInterface;
  use CodeIgniter\HTTP\ResponseInterface;
   use CodeIgniter\Filters\FilterInterface;

   /**
    * 
    */
   class Auth implements FilterInterface
   {
   	
   	public function before(RequestInterface $request, $arguments = null)
   	{
   		//si el usuario no esta logueado
   		if(!session()->get('logged_in')){
   			//entonces redirecciona a la pagina del loguin
   			return redirect()->to('/loguin'); 
   		}
   	}

   	public function after(RequestInterface $request, ResponseInterface $reponse, $arguments = null)
   {
//no serealiza ninguna accion

   }
   }