<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['tasks/(:any)'] = 'tasks/view/$1';
$route['tasks'] = 'tasks';
$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view';