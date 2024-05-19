<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;
use App\Controllers\News; // Add this line
use App\Controllers\Emails; // Add this line

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('news', [News::class, 'index']);           // Add this line
$routes->get('news/new', [News::class, 'new']); // Add this line
$routes->post('news', [News::class, 'create']); // Add this line
$routes->get('news/(:segment)', [News::class, 'show']); // Add this line

$routes->get('emails', [Emails::class, 'index']);           // Add this line
$routes->get('emails/new', [Emails::class, 'new']); // Add this line
$routes->post('emails', [Emails::class, 'create']); // Add this line
$routes->get('emails/(:segment)', [Emails::class, 'show']); // Add this line

$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);

