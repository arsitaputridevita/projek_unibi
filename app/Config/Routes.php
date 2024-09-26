<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 *
 */

 // ROUTE SETUp
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true); // Menambahkan Auto Routing

// LOWONGAN
$routes->get('/', 'lowongan::index');
$routes->get('/lowongan/create', 'lowongan::create');
$routes->post('/komik/save', 'Komik::save');




