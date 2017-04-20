<?php

include_once 'models/RegistrationModel.php';

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
    $result = $this->model->addUser();
    echo $result;
  }

}

 ?>
