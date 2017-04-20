<?php
session_start();
class Controller{
  public $model;
  public $view;

  function __construct($controllerName){
    $this -> view = new View();
    $model = $controllerName . 'Model';
    $this-> model = new $model();
  }
  function indexAction(){

  }
}

 ?>
