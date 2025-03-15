<?php

function call_action($routingArr, $action)
{
    $model = [];

    if (strpos($action, "/watch>>") === 0) 
    {
        $id = substr($action, strlen("/watch>>"));
        $_SESSION['watch'] = $id;
        header("Location: watch");
        exit();
    }
    if (strpos($action, "/watch>>") === 0) 
    {
        $id = substr($action, strlen("/watch>>"));
        $_SESSION['watch'] = $id;
        header("Location: watch");
        exit();
    }

    $nameOfController = $routingArr[$action];


    $responseView = $nameOfController($model);
    response($responseView, $model);
}

function response($view,$model)
{
    if (strpos($view, "redirect::") === 0) {
        $url = substr($view, strlen("redirect::"));
        header("Location: " . $url);
        exit();
    } 
    else {
        render($view,$model);
    }
}

function render($view,$model)
{
    if (strpos($view, "NOVIEW") === 0) 
    {
        exit();
    }
    extract($model);
    include 'views/'.$view.'.php';
}

?>