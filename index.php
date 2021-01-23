<?php
// Require Composer
require($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');

// Declare AltoRouter
$router = new AltoRouter();

// Require Base routes
require($_SERVER['DOCUMENT_ROOT'].'/'.'routes/base.php');

$match = $router->match();

if(is_array($match)){
    if(is_callable($match['target'])){
        call_user_func_array($match['target'], $match['params']);
    }else{
        $params = $match['params'];
        require("ressources/views/{$match['target']}.php");
    }
}else{
    require($_SERVER['DOCUMENT_ROOT']."/404.php");
}