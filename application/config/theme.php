<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Path to the Blade Library autoloader
|--------------------------------------------------------------------------
| If you are not using composer
| Enter Absolute path to the Blade autoloader.php file
*/
$config['blade_engine'] = FCPATH.'vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Theme Base Directory
|--------------------------------------------------------------------------
|
|
*/
$config['theme_directory'] = FCPATH.'application/views'.DIRECTORY_SEPARATOR;

/*
|--------------------------------------------------------------------------
| Current or Default Theme
|--------------------------------------------------------------------------
|
|
*/
$config['theme_default'] = '';
