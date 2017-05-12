<?php
namespace controllers;
use core\Controller;
use models\MainModel;
  class MainController extends Controller
  {
    

   public function indexAction()
   {
      $this->view->generate('mail', 'MainView.php');
   }

   public function loginAction(){
     $MainModel= new MainModel();
     $MainModel->loginCheck();
   }

   public function logoutAction(){
    $MainModel= new MainModel();
     $MainModel->logOut();
   }

  }

?>
