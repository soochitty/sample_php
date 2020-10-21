<?php 

 class route  {

    public static $validroute = array();


    public static function set($route, $function)  {

         self::$validroute[] = $route;
         if ($_GET['url'] == $route) {

             $function->__invoke();
         }
     }
     public static function get($route, $function){ 
        $method = $_SERVER['REQUEST_METHOD'];
        if($method !== 'GET'){ return; }
        }

} 
?>