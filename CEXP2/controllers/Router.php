<?php
class Router{
    public $route;
    
    public function __construct($route) {
        
        if($route){
            $controller = new viewController();
            $controller->load_view($route);
        }
    }
}