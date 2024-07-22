<!-- 
 **************************************************************************************************** 
    
    Autor: Meza Wakahayashi, Juan Ignacio
    Curso: Talentos Digitales
    Modulo: II
    Trabajo Parctico: Tarea Integradora trmo 3. 

    Este archivo PHP trata sobre la pagina donde se indica "se realiza la barra de navegacion"

*****************************************************************************************************
    -->
    <?php 
         $session=session();
         $nombre=$session->get('nombre');
         $perfil=$session->get('perfil_id')


    ?>
 <section>
            <img src="assets/img/logocafejuan.png" alt="Imagen Taza de Cafe" width="200" height="180" title="Imagen de la empresa"/>
         </section>

<!-- barra de navegacion -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
<!-- Navegacion Adminisradror-->
    <?php
            if (session()->perfil_id == 1): ?>
              <div class="btn btn-secondary active btnUser btn -sm">
               <a href = ""> ADMIN: <?php echo session('nombre');?></a>
              </div> 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Principal_CafeteriaNIPPON">Principal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registracion">Registrar Usuarios</a>
        </li>
         <li class="nav-item">
               <a class="nav-link" href="actualizar_usuarios">Actualizar Usuarios</a>
         </li>
          <li class="nav-item">
               <a class="nav-link" href="">Eliminar Usuarios</a>
          </li>      
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex ="-1" aria-disabled="true"> Cerrar Sesion</a>
        </li>
        
        
     <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo base_url('Principal_CafeteriaNIPPON')?>">

  
              <img src="<?php echo base_url('assets/img/logocafejuanSIN.png')?>" alt="" height="67" width="50" class= "img-fluid"/>
    
          </a>
     </div>    
      
   </ul>
 
     <form>
      <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <button class="btn btn-outline-warning" data-bs-toggle="dropdown" aria-expanded="false">
            Vista
          </button>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="#">Luz</a></li>
            <li><a class="dropdown-item" href="#">Oscuro</a></li>
            <li><a class="dropdown-item" href="#">Medio</a></li>
          </ul>
         </li>
        </ul>
        </div>  
     </form>

<!-- navegacion del cliente-->
  <?php
           elseif (session()->perfil_id == 2): ?>
              <div class="btn btn-secondary active btnUser btn -sm">
               <a href = ""> Cliente: <?php echo session('nombre');?></a>
              </div>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="Principal_CafeteriaNIPPON">Principal</a>
               </li>
               <li class="nav-item">
               <a class="nav-link" href="AcercaDe">Catalogo</a>
               </li>
                   
               <li class="nav-item">
               <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex ="-1" aria-disabled="true"> Cerrar Sesion</a>
               </li>
             </ul>
             <div class="navbar-header">
              <a class="navbar-brand" href="<?php echo base_url('Principal_CafeteriaNIPPON')?>">

  
              <img src="<?php echo base_url('assets/img/logocafejuanSIN.png')?>" alt="" height="67" width="50" class= "img-fluid"/>
    
             </a>
            </div> 
     <form>
      <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <button class="btn btn-outline-warning" data-bs-toggle="dropdown" aria-expanded="false">
            Vista
          </button>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="#">Luz</a></li>
            <li><a class="dropdown-item" href="#">Oscuro</a></li>
            <li><a class="dropdown-item" href="#">Medio</a></li>
          </ul>
         </li>
        </ul>
        </div>  
     </form>
            <form class="d-flex" role="search">
             <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>  
<!-- navegacion de clientes no logueados-->
  <?php else: ?>
                            
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="Principal_CafeteriaNIPPON">Principal</a>
               </li>
               <li class="nav-item">
               <a class="nav-link" href="AcercaDe">Catalogo</a>
               </li>
               <li class="nav-item">
               <a class="nav-link" href="AcercaDe">Acerca de</a>
               </li>
    <!-- </li> -->
              <li class="nav-item">
              <a class="nav-link" href="quienes_somos">Quienes somos</a>
              </li>        
              <li class="nav-item">
              <a class="nav-link" href="loguin">Ingresar</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="registracion">Registrarse</a>
              </li>
    


      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    <?php endif;?>
    </div>
  </div>

        
</nav>
<!--fin barra de navegacion -->