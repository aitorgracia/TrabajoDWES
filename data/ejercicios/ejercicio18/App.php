<?php

class App
{

  /*Este constructor decidí usarlo para iniciar la sesion en la pagina web, ya que lo que hace el index principal
  es crear un objeto de esta clase, por lo tanto, el constructor se ejecuta e inicia la sesión.*/

  function __construct()
  {
    session_start();   
  }

  /*Esta función run hace exactamente lo mismo que la anterior */

  public function run()
  {
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'login';
    }
  
    $this->$method();      
  }

  /*Esta función sirve para iniciar sesion en la página web y se llama por defecto cuando entras en la web por primera vez y cuando cierras sesion.
    Si al llamar a esta funcion, tienes la sesion iniciada, te redirecciona directamente al home, si no, cierra la sesión que has abierto y te muestra
    el login de la carpeta views*/

  public function login()
  {
    if (isset($_SESSION['name'])) 
    {
      header('Location: ?method=home');
      return;
    }
    else
    {
      setcookie(session_name(),'',time() -7200,'/');
      include('views/login.php');
    }
  }

  public function auth()
  {
    if (isset($_POST['name']) && !empty($_POST['name'])) {
      $name = $_POST['name'];
      $password = $_POST['password'];
    } else {
      header('Location: ?method=login');
      return;
    }
    $_SESSION['name'] = $name;
    $_SESSION['password'] = $password;
    $_SESSION['deseos'] = [];
    header('Location: index.php?method=home');
  }
  public function home()
  {
    if (!isset($_SESSION['name'])) {
      header('Location: ?method=login');
      return;
    }
    if (isset($_SESION['deseos'])) {
      $deseos = $_SESION['deseos'];
    } else {
      $deseos = [];
    }
    include('views/home.php');
  }

  public function new()
  {
    if (!isset($_POST['new'])) {
      header('Location: index.php?method=home');
      return;
    }
    $new = $_POST['new'];
    if (isset($_SESSION['deseos'])) {
      $deseos = $_SESSION['deseos'];
    } else {
      $deseos = [];
    }
    $deseos[] = $new;
    $_SESSION['deseos'] = $deseos;
    header('Location: index.php?method=home');
  }

  public function delete()
  {
    if (isset($_SESSION['deseos'])) {
      $deseos = $_SESSION['deseos'];
    } else {
      $deseos = [];
    }
    $id = $_GET['id'];
    unset($deseos[$id]);
    $_SESSION['deseos'] = $deseos;
    header('Location: index.php?method=home');
  }

  public function empty()
  {
    $_SESSION['deseos']=[];
    header('Location: index.php?method=home');    
  }

  public function close()
  {
    session_destroy();
    setcookie(session_name(), '', time() - 42000);
    header('Location: index.php?method=login');
  }
}
