<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'Aspanel/login';
$route['login'] = "Aspanel/login";
$route['daftar'] = "Aspanel/register";

$route['bank'] = "Bank/index";
/* Controller Frontend - Pembuka*/
$route['main'] = "Main/index";


/* Controller Default - Pembuka*/
$route['404_override'] = 'Notfound';
$route['translate_uri_dashes'] = FALSE;
$route['petacrawl\.xml'] = "petacrawl";
/* Controller Default - Penutup*/
