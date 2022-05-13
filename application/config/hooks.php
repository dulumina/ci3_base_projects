<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/userguide3/general/hooks.html
|
*/
# Load phpdotenv
$hook['pre_system'] = function() {
    // $dotenv = Dotenv\Dotenv::create( APPPATH . '../');
    $dotenv = Dotenv\Dotenv::createImmutable( APPPATH . '../');

    $dotenv->load();
};

$hook['post_controller_constructor'] = array(
        'class'    => 'Auth',
        'function' => 'auth_check',
        'filename' => 'Auth.php',
        'filepath' => 'hooks',
        'params'   => array(
            'ignored_class' => ['Login','ws','api'],
            'ignored_method' => ['class/method'], // penulisannya '[clsss]/[method]'
            'session_key' => 'is_allowed',
            'message'   => ""
        )
);