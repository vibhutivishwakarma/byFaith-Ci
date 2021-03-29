<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Auth/login';
$route['404_override'] = 'base/error';
$route['translate_uri_dashes'] = FALSE;


$route['homepage'] = 'base';

//----- Authentication routes------

$route['login'] = 'auth/login';
$route['signup'] = 'auth/signup';

//---validation routes---

$route['signing-up'] = 'auth/doSignup';
// $route['signup']['post'] = 'auth/doSignup';


$route['list-users'] = 'auth/index';
$route['logged-in'] = 'auth/dologin';









