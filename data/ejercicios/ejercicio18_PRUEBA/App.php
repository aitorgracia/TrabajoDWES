<?php

class App
{
  public function run()
  {
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'login';
    }
  
    $this->$method();      
  }

  public function login()
  {
    if (isset($_COOKIE['name'])) {
      header('Location: ?method=home');
      return;
    }
    include('views/login.php');
  }

  public function auth()
  {
    if (isset($_POST['name'])) {
      $name = $_POST['name'];
      $password = $_POST['password'];
    } else {
      header('Location: ?method=login');
      return;
    }
    setcookie('name', $name, time() + 60*60*2);
    setcookie('password', $password, time() + 60*60*2);
    header('Location: index.php?method=home');
  }
  public function home()
  {
    if (!isset($_COOKIE['name'])) {
      header('Location: ?method=login');
      return;
    }
    include('views/home.php');
  }

  public function close()
  {
    setcookie('name', '',  1);
    setcookie('password', '',  1);
    header('Location: index.php?method=login');
  }
}
