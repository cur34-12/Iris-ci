<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['equipment/create'] = 'equipment/create';
$route['equipment/update'] = 'equipment/update';
$route['equipment/(:any)'] = 'equipment/view/$1';
$route['equipment'] = 'equipment/index';
$route['vehicles/create'] = 'vehicles/create';
$route['vehicles/update'] = 'vehicles/update';
$route['vehicles/(:any)'] = 'vehicles/view/$1';
$route['vehicles'] = 'vehicles/index';
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
