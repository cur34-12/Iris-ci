<?php
defined('BASEPATH') OR exit('No direct script access allowed');



/* $route['url/url'] = 'controller/controller'; */

/* Issues Routes */
$route['issues/delete'] = 'issues/select_delete';
$route['issues/edit'] = 'issues/select_edit';
$route['issues/create'] = 'issues/create';
$route['issues/create/(:any)'] = 'issues/create/$1';
$route['issues/update'] = 'issues/update';
$route['issues/(:any)'] = 'issues/view/$1';
$route['issues'] = 'issues/index';

$route['issues/comment/(:any)'] = 'issues/new_comment/$1';
$route['issues/delete-comment/(:any)'] = 'issues/delete_comment/$1';

$route['issues/event'] = 'issues/create-event';

/* Locations Routes */
$route['locations/delete'] = 'locations/select_delete';
$route['locations/edit'] = 'locations/select_edit';
$route['locations/create'] = 'locations/create';
$route['locations/update'] = 'locations/update';
$route['locations/(:any)'] = 'locations/view/$1';
$route['locations'] = 'locations/index';

/* Equipment Routes */
$route['equipment/delete'] = 'equipment/select_delete';
$route['equipment/edit'] = 'equipment/select_edit';
$route['equipment/create'] = 'equipment/create';
$route['equipment/update'] = 'equipment/update';
$route['equipment/(:any)'] = 'equipment/view/$1';
$route['equipment'] = 'equipment/index';
$route['equipment/deleteLocation/(:any)/(:any)'] = 'equipment/delete_equipment_location/$1/$2';
$route['equipment/updateLocation'] = 'equipment/update_equipment_location';


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
$route['loans/create(:any)'] = 'loans/create/$1';
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
$route['members/delete'] = 'unitmembers/select_delete';
$route['members/edit'] = 'unitmembers/select_edit';
$route['members/create'] = 'unitmembers/create';
$route['members/update'] = 'unitmembers/update';
$route['members/(:any)'] = 'unitmembers/view/$1';
$route['members'] = 'unitmembers/index';

/* Vehicle Routes */
$route['vehicles/delete'] = 'vehicles/select_delete';
$route['vehicles/edit'] = 'vehicles/select_edit';
$route['vehicles/create'] = 'vehicles/create';
$route['vehicles/update'] = 'vehicles/update';
$route['vehicles/(:any)'] = 'vehicles/view/$1';
$route['vehicles'] = 'vehicles/index';

/* Calendar */
$route['calendar'] = 'pages/calendar';

/* User Management */
$route['admin/search'] = 'search/users';

/* Catch All Routes */
$route['search'] = "search/index";
$route[LOGIN_PAGE] = 'examples/login';
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;