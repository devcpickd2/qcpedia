<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

// $route['auth/login'] = 'auth/login';

$route['default_controller'] = 'utama';
$route['login'] = 'auth/login';
$route['home'] = 'home';

// $route['default_controller'] = 'auth/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// $route['login'] = 'auth/login';
$route['logout'] = 'auth/logout';

$routes['chat'] = 'chat::index';
$routes['chat/get_reply'] = ['Chat::get_reply'];

// $route['default_controller'] = 'auth/login';
// $route['login'] = 'auth/login';
// $route['home'] = 'home';

// // $route['default_controller'] = 'home';
// $route['404_override'] = '';
// $route['translate_uri_dashes'] = FALSE;

// $route['login'] = 'auth/login';
$route['logout'] = 'auth/logout';
$route['departemen'] = 'departemen';
$route['departemen/tambah'] = 'departemen/tambah';
$route['departemen/edit/(:any)'] = 'departemen/edit/$1';

$route['logout'] = 'auth/logout';

$route['plant'] = 'plant';
$route['plant/tambah'] = 'plant/tambah';
$route['plant/edit/(:any)'] = 'plant/edit/$1';

$route['pegawai'] = 'pegawai';
$route['pegawai/tambah'] = 'pegawai/tambah';
$route['pegawai/edit/(:any)'] = 'pegawai/edit/$1';
$route['pegawai/edituser/(:any)'] = 'pegawai/edituser/$1';
$route['pegawai/editpass/(:any)'] = 'pegawai/editpass/$1';

$route['sub-category'] = 'sub_category';
$route['sub-category/tambah'] = 'sub_category/tambah';
$route['sub-category/edit/(:any)'] = 'sub_category/edit/$1';

$route['pages'] = 'pages';
$route['pages/tambah'] = 'pages/tambah';
$route['pages/edit/(:any)'] = 'pages/edit/$1';
$route['pages/detail/(:any)'] = 'pages/detail/$1';

$route['category'] = 'category';
$route['category/tambah'] = 'category/tambah';
$route['category/edit/(:any)'] = 'category/edit/$1';
$route['category/new/(:any)'] = 'category/new/$1';

$route['sub-category2/(:any)'] = 'sub_category2/index/$1';
$route['category2'] = 'category2';
$route['category2/(:any)'] = 'category2/index/$1';
$route['pages2/detail/(:any)'] = 'pages2/detail/$1';
$route['pages2/(:any)'] = 'pages2/$1';
$route['pages2/(:any)'] = 'pages2/index/$1';

$route['about'] = 'about';
$route['contact'] = 'contact';

