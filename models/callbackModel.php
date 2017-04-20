<?php 

	class callbackModel extends Model
	{
		public function addComment()
		{
			$name = isset($_POST['name']) && $_POST['name'] !== '' ? trim(htmlspecialchars(stripslashes($_POST['name']))) : false;
    		$email = isset($_POST['email']) && $_POST['email'] !== '' ? trim(htmlspecialchars(stripslashes($_POST['email']))) : false;
    		$text = isset($_POST['message']) && $_POST['message'] !== '' ? trim(htmlspecialchars(stripslashes($_POST['message']))) : false;

    		if ( ! $name && ! $email) {
      			exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    		}

    		return self::$query->execute("INSERT INTO callbacks (`name`, `email`, `text`) VALUES ('$name', '$email', '$text')");
    		
		}
	}

 ?>