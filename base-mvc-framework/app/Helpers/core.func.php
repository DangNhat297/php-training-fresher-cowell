<?php

if(!function_exists('isClosure')){
    function isClosure(\Closure $func){
        $reflection = new ReflectionFunction($func);

        return (bool) $reflection->isClosure();
    }
}
