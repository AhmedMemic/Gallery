<?php 

function classAutoLoader($class) {
    $class = strtolower($class);
    $the_path = "{$class}.php";

    if(is_file($the_path) && !class_exists($class)) {
        require_once($the_path);
    } else {
        die("The file named {$the_path} was not found!"); 
    }
}

spl_autoload_register("classAutoLoader");

function redirect($location) {
    header("Location: {$location}");
}