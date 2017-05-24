<?php
defined('BASEPATH') OR exit('No direct script access allowed');



/* $route['url/url'] = 'controller/controller'; */

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

$route['equipment-groups/delete'] = 'equipment/eqgroups_select_delete';
$route['equipment-groups/edit'] = 'equipment/eqgroups_select_edit';
$route['equipment-groups/edit/(:any)'] = 'equipment/eqgroups_edit/$1';
$route['equipment-groups/create'] = 'equipment/eqgroups_create';
$route['equipment-groups/update'] = 'equipment/eqgroups_update';
$route['equipment-groups/(:any)'] = 'equipment/eqgroups_view/$1';
$route['equipment-groups'] = 'equipment/eqgroups_index';

/* Loans Routes */
$route['loans/delete'] = 'loans/select_delete';
$route['loans/edit'] = 'loans/select_edit';
$route['loans/create'] = 'loans/create';
$route['loans/update'] = 'loans/update';
$route['loans/(:any)'] = 'loans/view/$1';
$route['loans'] = 'loans/index';

$route['loan-groups/delete'] = 'loangroups/select_delete';
$route['loan-groups/edit'] = 'loangroups/select_edit';
$route['loan-groups/create'] = 'loangroups/create';
$route['loan-groups/update'] = 'loangroups/update';
$route['loan-groups/(:any)'] = 'loangroups/view/$1';
$route['loan-groups'] = 'loangroups/index';

/* Suppliers Routes */
$route['suppliers/delete'] = 'suppliers/select_delete';
$route['suppliers/edit'] = 'suppliers/select_edit';
$route['suppliers/create'] = 'suppliers/create';
$route['suppliers/update'] = 'suppliers/update';
$route['suppliers/(:any)'] = 'suppliers/view/$1';
$route['suppliers'] = 'suppliers/index';

/* Member Routes */
$route['members/delete'] = 'members/select_delete';
$route['members/edit'] = 'members/select_edit';
$route['members/create'] = 'members/create';
$route['members/update'] = 'members/update';
$route['members/(:any)'] = 'members/view/$1';
$route['members'] = 'members/index';

/* Vehicle Routes */
$route['vehicles/delete'] = 'vehicles/select_delete';
$route['vehicles/edit'] = 'vehicles/select_edit';
$route['vehicles/create'] = 'vehicles/create';
$route['vehicles/update'] = 'vehicles/update';
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

/* User Management */
$route['admin/search'] = 'search/users';

/* Catch All Routes */
$route['search'] = "search/index";

$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;