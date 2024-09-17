<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::login');
$routes->get('/livre/delete/(:num)', 'Home::delete/$1');
$routes->get('home/ajoutLivre', 'Home::ajoutLivre');
$routes->get('ajoutLivre', 'Home::ajoutLivre');
$routes->post('AddLivre', 'Home::AddLivre');
$routes->post('/livre/update/(:num)','Home::update/$1');
$routes->get('/livre/edit/(:num)','Home::edit/$1');
$routes->get('home/liste','Home::index');
$routes->get('liste','Home::index');
$routes->post('AddClient', 'Home::Addclient');
$routes->get('home/listeClient','Home::listeClient');
$routes->get('listeClient','Home::listeClient');
$routes->get('/client/deleteClient/(:num)','Home::deleteClient/$1');
$routes->get('/client/RendreLivre/(:segment)','Home::RendreLivre/$1');
$routes->get('home','Home::home');
$routes->get('home/home','Home::home');
$routes->post('loginclick','Home::loginClick');
$routes->get('signIn','Home::signIn');
$routes->post('signInClick','Home::signInClick');
$routes->get('listeCleanClient','Home::listeCleanClient');
//$routes->post('home','Home::signInClick');

