<?php

require dirname(__FILE__) . '/controllers/Controller.php';


    isset($_GET['r']) ? $r = $_GET['r'] : $r = 'site/index';
    $r = explode('/', $r);
    $controller = ucwords($r[0]) . 'Controller';
    $action = $r[1];
    
    $args = $_GET;
    
    if(count($args) > 1){
        array_shift($args);
        $params = $args;
    }
    
    $ls = new $controller();

    if(isset($ls->layouts)){
        $layoutDir = 'layouts/' . $ls->layouts;

        require $layoutDir . '/header.php';
    }
   
    $controller::$action(isset($params) ? implode(',', $params) : '');

    if(isset($ls->layouts)){
        require $layoutDir . '/footer.php';
    }