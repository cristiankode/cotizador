<?php
define('ROOT', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);

spl_autoload('autoload');

function autoload($class){
    $class = ROOT . DS . str_replace("\\", DS, $class) . '.php';
    
    if(!file_exists($class)){
        throw new Exception("Error al cargar la clase" . $class);
    }
    
    require_once ($class);
}