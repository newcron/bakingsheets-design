<?php

spl_autoload_register(function($className){
    $path = preg_replace("/\\\\/", "/", $className);
    $classFilename =  __DIR__."/../../src/php/".$path . ".php";

    try {
        require $classFilename;
    } catch(PHPUnit_Framework_Error_Warning $exception) {
        throw new Exception("could not load $classFilename from ".__DIR__);
    }

});