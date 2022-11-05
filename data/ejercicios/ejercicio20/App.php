<?php

class App
{

  /*Este constructor hace lo mismo que el constructor de la clase App del ejercicio 18.*/

  public function __construct()
  {
    session_start();    
  }

   /*Esta función run hace lo mismo que la del ejercicio 17 llamada igual.*/

  public function run()
    {
      if (isset($_GET['method'])) {
        $method = $_GET['method'];
      } else {
        $method = 'home';
      }
    
      $this->$method();      
    }

    /*Los siguientes métodos funcionan exactamente igual que los de el ejercicio anterior, pero gestionando sesiones en vez de cookies.*/
     
    public function home()
    {

    if (isset($_SESSION['color'])) {
      
      header('Location: index.php?method=colores');
     
    }
    else{
      include('views/colores.html');
        
    }
  }

  public function cambio(){

    $id = $_GET['color'];

    $_SESSION['color'] = $id;
   
    header('Location: index.php?method=colores');

  }

  
  public function colores(){
    echo '<body style="background-color:'.$_SESSION['color'].'">';
    include('views/home.php');

  }

  public function borrar(){
    session_destroy();
    include('views/colores.html');

  }

}
