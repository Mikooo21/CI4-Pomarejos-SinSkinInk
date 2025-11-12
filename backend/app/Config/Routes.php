<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->post('login', 'Auth::login');
$routes->post('logout', 'Auth::logout');
$routes->post('signup', 'Auth::signup');
$routes->get('/road', 'Users::roadmap');
$routes->get('/mood', 'Users::moodboard');