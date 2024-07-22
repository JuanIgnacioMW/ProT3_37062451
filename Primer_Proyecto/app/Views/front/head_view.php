<!-- 
 **************************************************************************************************** 
    
    Autor: Meza Wakahayashi, Juan Ignacio
    Curso: Talentos Digitales
    Modulo: II
    Trabajo Parctico: Tarea Integradora tramo 3. 

    Este archivo PHP trata sobre la pagina donde se indica "la cabecera de la pagina"

*****************************************************************************************************
    -->


<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- <title>Principal Cafeteria NIPPON</title> -->
    <title><?php echo($titulo);?></title>

    <!--<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/miEstilo.css" /> -->

    <link  href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet"/>
    <link href="<?php echo base_url('assets/css/miEstilo.css');?>" rel="stylesheet"/>

    <meta charset="utf-8" />
   
    
</head>
<body>