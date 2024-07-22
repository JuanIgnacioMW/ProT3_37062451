 **************************************************************************************************** 
    
    Autor: Meza Wakahayashi, Juan Ignacio
    Curso: Talentos Digitales
    Modulo: II
    Trabajo Parctico: Tarea Integradora 2. 

    Este archivo PHP trata sobre la pagina donde se indica "Ingresar a la cuenta (loguin)"

*****************************************************************************************************
    -->

<div class="container mt-0 mb-0">
    <div class= "card-header text-justify">
        <div class="row d-flex justify-content-center">
            <div class="card col-lg-3" miestilo="width: 50%;">
              <h4>Actualizacion de Nuestros Clientes</h4>

             <?php $validation = \Config\Services::validation(); ?>
                <form method="post" action="<?php echo base_url('/enviar-form2') ?>">
                  <?=csrf_field();?>
                  <?=csrf_field();?>
                 <?php if(!empty (session()-> getFlashdata('fail'))):?>
                 <div class="alert alert-danger"><?= sesseion() -> getFlashdata('success');?></div>
                 <?php endif?>

                  <?php if(!empty (session()->getFlashdata('success'))):?>
                     <div class="alert alert-danger"><?= sesseion() -> getFlashdata('success');?></div>
                  <?php endif?>
                
                <label for="nombres">Nombres:</label>
        <input type="text" name="nombre" id="nombres" value="<?= $usuario['nombres']; ?>"><br>
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellido" id="apellidos" value="<?= $usuario['apellidos']; ?>"><br>
        <label for="correo">Correo:</label>
        <input type="email" name="email" id="correo" value="<?= $usuario['correo']; ?>"><br>

        <label for="nombre_usuario">Nombre de Usuario:</label>
        <input type="text" name="nombre_usuario" id="nombre_usuario" value="<?= $usuario['nombre_usuario']; ?>"><br>
        <label for="contraseña">Contraseña:</label>
        <input type="password" name="pass" id="contraseña"><br>
        <label for="baja">Baja:</label>
        <input type="text" name="baja" id="baja" value="<?= $usuario['baja']; ?>"><br>
        <button type="submit">Guardar</button>
    </form>

      <section>
          <p>
              
          </p>
 </section>            