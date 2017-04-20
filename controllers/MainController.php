<?php





  class MainController extends Controller
  {

   public function indexAction()
   {
      $this->view->generate('mail', 'MainView.php');
   }

   public function loginAction(){
     $this->model->loginCheck();
   }

   public function logoutAction(){
     $this->model->logOut();
   }

  }

?>
