<?php

if(!function_exists('config')){
    function config($key){
        $configArr = (object)parse_ini_file('./config.ini');
        return $configArr->{$key} ?? null;
    }
}

if(!function_exists('view')){
    function view($path, $data = []){
        $path = str_replace('.', '/', $path);
        extract($data);
        include_once './app/Views/' . $path . '.php';
    }
}

if(!function_exists('redirect')){
    function redirect($url){
        header("Location: $url");
        exit();
    }
}