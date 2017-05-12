<?php 
namespace controllers;
use core\Controller;
use models\feedbackModel;
	class feedbackController extends Controller
	{
		public function indexAction()
		{
		
			if(isset($_SESSION['user']))
			{	
				$callbackModel = new feedbackModel();
				$data = $callbackModel->getAllItems('callbacks');
				$this->view->generate('feedbacks', 'feedbacks.html', $data);
			}
			else
			{
				$this->view->generate('404','error404.html');
			}
			
		}
	}
 ?>