<?php

/**Create a food order form*/

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Start a session
session_start();

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//fat-free debugging
$f3->set('DEBUG', 3);

//Define a default route (home page)
$f3->route('GET /', function() {
    //echo "Home Page";
    //Display a view
    $view = new Template();
    echo $view->render('views/info.html');


});


//Run fat free
$f3->run();