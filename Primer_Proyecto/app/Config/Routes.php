<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('Principal_CafeteriaNIPPON', 'Home::index');
$routes->get('AcercaDe', 'Home::funcion_AcercaDe');
$routes->get('loguin', 'Home::funcion_loguin');
$routes->get('registracion', 'Home::funcion_registracion');
$routes->get('quienes_somos', 'Home::funcion_quienes_somos');

/*rutas del registro de usuarios */
$routes->get('/registro','usuario_controller::create');
$routes->post('/enviar-form','usuario_controller::formValidation');

/*
/*rutas del login*/
$routes->get('/loguin', 'loguin_controller');
$routes->post('/enviarlogin', 'loguin_controller::auth');
$routes->get('/panel', 'panel_controller::index', ['filter' => 'auth']);
$routes->get('/logout', 'loguin_controller::logout');

/*
/*rutas del actualizar datos de usuarios*/
$routes->get('/actualizar_usuarios','usuario_controller::update($id)');
$routes->post('/enviar-form2','usuario_controller::update($id)');