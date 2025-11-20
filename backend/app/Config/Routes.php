<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->get('/login', 'Users::login');
$routes->get('/signup', 'Users::signup');
$routes->get('/road', 'Users::roadmap');
$routes->get('/mood', 'Users::moodboard');
$routes->post('/signup', 'Auth::signup');
$routes->post('/login', 'Auth::login');
$routes->get('/logout', 'Auth::logout');