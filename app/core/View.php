<?php

namespace app\core;

class View
{
    public $path;
    public $layout = 'default';
    public $route;


 public function __construct($route)
 {
    $this->route= $route;
    $this->path = $route['controller'].'/'.$route['action'];
 }


 public function render($title,$vars=[])
 {
     extract($vars);
     if(file_exists('app/views/'.$this->path.'.php'))
     {
         ob_start(); //to assign view for var-content
         require_once 'app/views/' . $this->path . '.php';
         $content = ob_get_clean();
         require_once 'app/views/layouts/' . $this->layout . '.php';
     }
     else
         {
             echo 'Unknown view'.$this->path;
         }
 }

 public static function errorCode($code)
 {
     http_response_code($code);
     require_once 'app/views/errors/'.$code.'.php';
     exit();
 }

 public function redirect($url)
 {
     header('location: '.$url);
     exit();
 }
}