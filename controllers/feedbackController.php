<?php 

	class feedbackController extends Controller
	{
		public function indexAction()
		{
		
			if(isset($_SESSION['user']))
			{
				$data = $this->model->getAllItems('callbacks');
				$this->view->generate('feedbacks', 'feedbacks.html', $data);
			}
			else
			{
				$this->view->generate('404','error404.html');
			}
			
		}
	}
 ?>