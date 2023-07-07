<?php 
spl_autoload_register(function ($class_name){
    // var_dump($class_name);
    require_once "classes\\$class_name.php";
}); 