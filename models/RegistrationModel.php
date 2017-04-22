<?php

class RegistrationModel extends Model
{

  public function addUser()
  {
    $login = isset($_POST['name']) && $_POST['name'] !== '' ? trim(htmlspecialchars(stripslashes($_POST['name']))) : false;
    $password = isset($_POST['password']) && $_POST['password'] !== '' ? trim(htmlspecialchars(stripslashes($_POST['password']))) : false;

    if ( ! $login && ! $password) {
      exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }

    $lastname = isset($_POST['lastName']) && $_POST['lastName'] !== '' ? trim(htmlspecialchars(stripslashes($_POST['lastName']))) : null;
    $sex = $_POST['state'];
    $date = $_POST['birthDate'];


    $result = self::$query->queryRow("SELECT * from users WHERE name='$login'");
    print_r($result);
    if(!empty($result)) {
      exit ("1Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
    }

    $result = self::$query->execute("INSERT INTO users (name, lastName, password, sex, `date`) VALUES('$login', '$lastname', '$password', '$sex', '$date')");

    if ($result) {
      echo "2Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='/MVC'>Главная страница</a>";
          $_SESSION['user']=$result['name'];
    }
      else{
          echo 'error';
      }

      return $result;

  }
}
