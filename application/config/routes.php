<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'auth/login';

$route['404_override'] = 'base/error';

$route['translate_uri_dashes'] = FALSE;



//----- login page------

$route['login'] = 'auth/login';

//-------sign up -------

$route['signup'] = 'auth/signup';

//---    error   ---

$route['homepage'] = 'base';


//---validation-check---

$route['signup'] = 'auth/doSignup';
// $route['signup']['post'] = 'auth/doSignup';


//---- list users---
$route['list-users'] = 'auth/index';

$route['logged-in'] = 'auth/dologin';









