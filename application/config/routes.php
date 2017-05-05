<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* Issues Routes */
$route['issues/delete'] = 'issues/select_delete';
$route['issues/edit'] = 'issues/select_edit';
$route['issues/create'] = 'issues/create';
$route['issues/update'] = 'issues/update';
$route['issues/search'] = 'search/issues';
$route['issues/(:any)'] = 'issues/view/$1';
$route['issues'] = 'issues/index';

/* Equipment Routes */
$route['equipment/delete'] = 'equipment/select_delete';
$route['equipment/edit'] = 'equipment/select_edit';
$route['equipment/create'] = 'equipment/create';
$route['equipment/update'] = 'equipment/update';
$route['equipment/search'] = 'search/equiment';
$route['equipment/(:any)'] = 'equipment/view/$1';
$route['equipment'] = 'equipment/index';

/* Vehicle Routes */
$route['vehicles/delete'] = 'vehicles/select_delete';
$route['vehicles/edit'] = 'vehicles/select_edit';
$route['vehicles/create'] = 'vehicles/create';
$route['vehicles/update'] = 'vehicles/update';
$route['vehicles/search'] = 'search/vehicles';
$route['vehicles/(:any)'] = 'vehicles/view/$1';
$route['vehicles'] = 'vehicles/index';

/* Calendar Routes */
$route[LOGIN_PAGE] = 'profile/login';
$route['register'] = 'register';
$route['feeds'] = 'feeds'; 
$route['home'] = 'profile/login';   
$route['profile/home'] = 'profile/login'; 
$route['profile'] = 'profile/home'; 
$route['admin'] = 'admin/home';
$route['([a-z0-9]+[-_]+[a-z0-9]+)|([a-z0-9]+\W+)'] = 'page/title/$1';
$route['page'] = 'page';
$route['sitemap\.xml'] = "seo";

/* Barcode Route */
$route['barcode/create_code39'] = 'barcoding/ean13';
$route['barcode/create_qr'] = 'barcoding/qr';

/* User Management */
$route['admin/search'] = 'search/users';

/* Catch All Routes */
$route['search'] = "search/index";

$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;