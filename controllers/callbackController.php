<?php 
namespace controllers;
use core\Controller;
use models\callbackModel;
	class callbackController extends Controller
	{
		public function indexAction()
		{	
			$this->view->generate('callback', 'callback.html');
		}
		public function commentAction()
		{	
			$callbackModel = new callbackModel();
			print_r($callbackModel);
			$answer = $callbackModel->addComment();
			if($answer == 1)
			{
				$data = 'Your comment was sent to administrator';
			}
			else
			{
				$data = 'eXeption';
			}
			$this->view->generate('callback', 'callback.html', $data);
		}
	}

 ?>