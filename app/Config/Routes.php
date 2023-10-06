<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomepageController::index');
$routes->get('/about-us', 'AboutController::index');
$routes->get('/detection', 'DetectionController::index');
