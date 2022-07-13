<?php

class Route{

    public $route;
    public $action;
    public static $register = [];
    private static $__instance;

    private function __construct(){
        $this->route = $_GET['route'] ?? "/";
        $this->route = self::processRoute($this->route);
        $method = $_SERVER['REQUEST_METHOD'];
        self::doAction($method, $this->route);
    }

    public static function init(){
        if(!isset(self::$__instance)){
            self::$__instance = new Route();
        };
        return self::$__instance;
    }

    public static function get($route, \Closure | array $action){
        $route = self::processRoute($route);
        self::$register['GET'][$route] = $action;
    }

    public static function post($route, \Closure | array $action){
        $route = self::processRoute($route);
        self::$register['POST'][$route] = $action;
    }

    public static function doAction($method, $route){
        $keyRoute = "";
        $route = str_replace("\/", "/", $route);

        foreach(array_merge(self::$register['GET'] ?? [], self::$register['POST'] ?? []) as $key => $value){
            if(preg_match("#^$key$#", $route, $match)){
                $keyRoute = $key;
                break;
            }
        }
        if(!empty($match) && count($match) > 1){
            unset($match[0]);
        }
        // $action = self::$register[$method][$keyRoute];
        if(isset(self::$register[$method][$keyRoute])){
            $action = self::$register[$method][$keyRoute];
            if($action instanceof \Closure){
                echo $action();
            } else {
                $class = new $action[0];
                $class->{$action[1]}(...$match);
            }
        } else {
            die('Route is not defined');
        }
    }

    public static function processRoute($route){
        // echo $route. '<br/>';
        if($route != "/"){
            $route = trim($route, "/");
            $route = str_replace("/", "\/", $route);
            $route = preg_replace("#{.*}#iU", "(\d+)", $route);
            // echo $route. '<br/>';
        } else {
            $route = "/";
        }
        return $route;
    }

}