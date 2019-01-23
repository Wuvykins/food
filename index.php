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
$f3->route('GET /', function($f3) {
    //save variables
    $f3->set('username', 'jshmo');
    $f3->set('password', sha1('Password01'));
    $f3->set('title', 'Working with Templates');
    $f3->set('temp', '67');
    $f3->set('radius', '10');
    $f3->set('fruits', array('apple', 'orange', 'banana'));
    $f3->set('temp', '67');
    $f3->set('links',array('Google'=>"http://www.google.com",
        'fox'=>"http://www.fox.com"));
    $f3->set('desserts',array('chocolate'=>"Chocolate Mousse",
        'vanilla'=>"Vanilla Custard",'strawberry'=>"Strawberry Shortcake"));


    //load template
    $template = new Template();
    echo $template->render('views/info.html');

    //alternate syntax
    //echo Template::instance() ->render('views/info.html');
});
/*
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

//define a route with a parameter
$f3->route('GET /@food', function($f3, $params)
{
    print_r($params);
    echo "<h3>I like" . $params['food'] . "</h3>";
});

//define a route with multiple parameters
$f3->route('GET /@meal/@food', function($f3, $params)
{
    print_r($params);
    $validMeals = ['breakfast', 'lunch', 'dinner'];
    $meal = $params['meal'];
    //check validity
    if (!in_array($meal, $validMeals))
    {
        echo "<h3>Sorry, we don't serve $meal</h3>";
    }
    else
    {
        switch (meal)
        {
            case 'breakfast': $time = " in the morning"; break;
            case 'lunch': $time = " at noon"; break;
            case 'dinner': $time = " in the evening"; break;
        }
        echo "<h3>I like " . $params['food'] . " $time</h3>";
    }
});

//define a route to display order form
$f3->route('GET /order', function()
{
    $view = new View();
    echo $view->render('views/form1.html');
});

//define an order to process orders
$f3->route('POST /order-process', function($f3)
{
    print_r($_POST);

    $food = $_POST['food'];
    echo "you ordered food";
    if ($food == 'pizza')
    {
        //reroute to pizza page
        $f3->reroute("pizza");
    }
    else
    {
        $f3->reroute("");
    }


});

$f3->route('GET /dessert/@param', function($f3, $params)
{
    $params = $params["params"];
    if ($params == "pie")
    {
        echo "<h3>I like pie</h3>";
    }
    else
    {
        $f3->error(404);
    }

});
*/

//Run fat free
$f3->run();