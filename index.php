<?php

// Kickstart the framework
$f3=require('lib/base.php');

$f3->set('DEBUG',1);
if ((float)PCRE_VERSION<7.9)
	trigger_error('PCRE version is out of date');

// Load configuration
$f3->config('config/config.ini');



// MySql settings
$db = $f3->set('DB', new DB\SQL(
    'mysql:host=' . $f3->get('DB_SERVER') . ';port=3306;dbname=' . $f3->get('DB_NAME'),
    $f3->get('DB_USER'),
    $f3->get('DB_PASSW')
));

$f3->route('GET /', 'Home->index');
$f3->route('GET /view_farms', 'Home->view_farms');
$f3->run();
