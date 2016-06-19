<?php

session_start();

function isAuthenticated(){ 
    return isset($_SESSION['username'], $_SESSION['password']);
}

$uri = $_SERVER['REQUEST_URI'];
$routes = [
    'auth' => [
        '/userLandingPage.php',
        '/logout.php',
	'/editPage.php'
    ],
    'unauth' => [
        '/',        /*Index page*/
        '/register.php',
        '/addUser.php'
    ]
];

if(isAuthenticated()){
    if(in_array( $uri , $routes['unauth'])){
        header("Location:/userLandingPage.php");
    }
}else{
    if(in_array($uri , $routes['auth'])){
        header("Location:/");
    }
}

