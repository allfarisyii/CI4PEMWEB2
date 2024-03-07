<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/about', 'Page::About');
$routes->get('/contact', 'Page::Contact');
$routes->get('/faqs', 'Page::Faqs');

$routes->setAutoRoute(true);
