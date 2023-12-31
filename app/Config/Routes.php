<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomepageController::index');
$routes->get('/about-us', 'AboutController::index');
$routes->get('/detection', 'DetectionController::index');
$routes->get('/info', 'InfoController::index');
$routes->get('/articles', 'InfoController::articles');
$routes->get('/prediction', 'DetectionController::prediction');
$routes->post('/prediction', 'DetectionController::prediction');
