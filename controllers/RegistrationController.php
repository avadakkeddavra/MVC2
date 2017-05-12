<?php
namespace controllers;
use core\Controller;
use models\RegistrationModel;

/**
 *
 */
class RegistrationController extends Controller
{
  
  public function indexAction()
  {
    $this->view->generate('sdfg', 'RegistrationView.php');
  }

  public function signupAction()
  {
  	$this->model = new RegistrationModel();
    $result = $this->model->addUser();
    echo $result;
  }

}

 ?>
