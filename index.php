<?php

/**Create a food order form*/

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Start a session
session_start();

//Require the necessary files
require_once('vendor/autoload.php');
require_once('model/data-layer.php');

//Create an instance of the Base class
$f3 = Base::instance();

//fat-free debugging
$f3->set('DEBUG', 3);

//Define a default route (home page)
$f3->route('GET /', function($f3) {
    //echo "Home Page";

    //Save variables
    $f3->set('username', 'jshmo');
    $f3->set('password', sha1('Password01'));
    $f3->set('title', 'Working with Templates');
    $f3->set('ftemp', 67);
    $f3->set('color', 'purple');
    $f3->set('radius', 10);
    $f3->set('veg', array('carrot', 'potato', 'bok choy'));
    $f3->set('fruits', getFruit());
    $f3->set('salaries', getSalary());
    $f3->set('desserts', getDesserts());
    $f3->set('num', 10);
    $f3->set('preferredCustomer', true);
    //$f3->set('myPet', new Pet('Fido'));

    //Display a view
    $view = new Template();
    echo $view->render('views/info.html');


});


//Run fat free
$f3->run();