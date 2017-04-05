<?php

include_once "system/libs/Main.php";
include_once "system/libs/SController.php";
include_once "system/libs/SModel.php";
include_once "system/libs/Database.php";
include_once "system/libs/Load.php";

$url = isset($_GET['url']) ? $_GET['url'] : NULL;
if($url != NULL){
    $url = rtrim($url, "/");
    $url = explode("/", filter_var($url, FILTER_SANITIZE_URL));
}else{
    unset($url);
}

$controller = isset($url[0]) ? $url[0] : NULL;
$method     = isset($url[1]) ? $url[1] : NULL;
$parameter  = isset($url[2]) ? $url[2] : NULL;

if($controller){
    include_once "app/controllers/".$controller.".php";
    $shahali = new $controller();

    if($parameter){
        $shahali->$method($parameter);
    }
    else{
        if($method){$shahali->$method(NULL);}
        else{

        }
    }
}else{
    include_once "app/controllers/Index.php";
    $index = new Index();
    $index->home();
}
