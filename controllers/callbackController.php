<?php 

	class callbackController extends Controller
	{
		public function indexAction()
		{	
			$this->view->generate('callback', 'callback.html');
		}
		public function commentAction()
		{
			$answer = $this->model->addComment();
			if($answer == 1)
			{
				$data = 'Your comment was sent to administrator';
			}

			$this->view->generate('callback', 'callback.html', $data);
		}
	}

 ?>