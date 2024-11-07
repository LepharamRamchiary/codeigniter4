<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('home', 'Home::index');

// Add url for SEO
// $routes->add('about', 'Home::about');

// grouping routes
$myroutes = [];
$myroutes['about'] = 'Home::about';
$myroutes['newcollection'] = 'Home::newcollection';
$myroutes['new-jshbk'] = 'Home::newJK';

// routes with parameters
$myroutes['register/(:num)/(:alpha)'] = 'Sample::create/$1/$2';
$routes->map($myroutes);

$routes->set404Override(function () {
   echo view('errors/custom_error'); 
});