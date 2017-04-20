<?php
namespace MVC\library;
/**
 * makeing roots to pages

 */

class Router
{

  public function start()
  {
      $dom = '/MVC';
      $uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

      $route= [
        $dom . '/'     => ['controllers' => 'Main', 'action' => 'index'],
        $dom . '/form' => ['controllers' => 'Main', 'action' => 'form']
      ];

      if(isset($route[$uri])){
        $controller_file = "controllers/" . $route[$uri]['controllers'] . 'Controller.php';
        $controller      = $route[$uri]['controllers'] . 'Controller';
        require_once $controller_file;
        $ctrl_obj = new $controller();
        $ctrl_obj -> $route[$uri]['action']();
      }
      else{
        echo 'no such Controller';
      }
  }
}


 ?>
