<?php
//Turn on error reporting
ini_set('display_errors' , 1);
error_reporting(E_ALL);

//Require
require_once('vendor/autoload.php');

//create an instance of the Base class (instantiateing fat free
$f3 = Base::instance();

//Turn on Fat-Free error reporting
$f3->set('DEBUG', 3);

//define a default route
$f3->route('GET /', function() {
    //echo '<h1>my fav foods</h1>';
    $view = new View();
    echo $view->render('views/home.html');
});

//Define a breakfast route
$f3->route('GET /breakfast', function(){ //get method is the default to go to a root
    $view = new View();
    echo $view->render('views/breakfast.html');
});
//create a lunch route
$f3->route('GET /lunch', function(){ //get method is the default to go to a root
    $view = new View();
    echo $view->render('views/lunch.html');
});
//Define a breakfast/pancakes route
$f3->route('GET /breakfast/pancakes', function(){ //get method is the default to go to a root
    $view = new View();
    echo $view->render('views/pancakes.html');
});
//Define a dinner route
$f3->route('GET /dinner', function(){ //get method is the default to go to a root
    $view = new View();
    echo $view->render('views/dinner.html');
});

//pizza
$f3->route('GET /dinner/pizza', function(){ //get method is the default to go to a root
    $view = new View();
    echo $view->render('views/pizza.html');
});

//steak
$f3->route('GET /dinner/steak', function(){ //get method is the default to go to a root
    $view = new View();
    echo $view->render('views/steak.html');
});

//rolls
$f3->route('GET /dinner/rolls', function(){ //get method is the default to go to a root
    $view = new View();
    echo $view->render('views/rolls.html');
});

//Run fat free
$f3->run();