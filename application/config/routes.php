<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* Issues Routes */
$route['loans/delete'] = 'loans/select_delete';
$route['loans/edit'] = 'loans/select_edit';
$route['loans/create'] = 'loans/create';
$route['loans/update'] = 'loans/update';
$route['loans/(:any)'] = 'loans/view/$1';
$route['loans'] = 'loans/index';

/* Lists Routes */
$route['lists/delete'] = 'lists/select_delete';
$route['lists/edit'] = 'lists/select_edit';
$route['lists/create'] = 'lists/create';
$route['lists/update'] = 'lists/update';
$route['lists/(:any)'] = 'lists/view/$1';
$route['lists'] = 'lists/index';

/* Issues Routes */
$route['issues/delete'] = 'issues/select_delete';
$route['issues/edit'] = 'issues/select_edit';
$route['issues/create'] = 'issues/create';
$route['issues/update'] = 'issues/update';
$route['issues/(:any)'] = 'issues/view/$1';
$route['issues'] = 'issues/index';

/* Equipment Routes */
$route['equipment/delete'] = 'equipment/select_delete';
$route['equipment/edit'] = 'equipment/select_edit';
$route['equipment/create'] = 'equipment/create';
$route['equipment/update'] = 'equipment/update';
$route['equipment/(:any)'] = 'equipment/view/$1';
$route['equipment'] = 'equipment/index';

/* Vehicle Routes */
$route['vehicles/delete'] = 'vehicles/select_delete';
$route['vehicles/edit'] = 'vehicles/select_edit';
$route['vehicles/create'] = 'vehicles/create';
$route['vehicles/update'] = 'vehicles/update';
$route['vehicles/(:any)'] = 'vehicles/view/$1';
$route['vehicles'] = 'vehicles/index';

/* Catch All Routes */
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;