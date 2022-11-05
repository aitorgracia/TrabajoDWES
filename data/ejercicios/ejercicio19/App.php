<?php

class App
{

  /*Esta función run hace lo mismo que la del ejercicio 17 llamada igual*/

    public function run()
    {
      if (isset($_GET['method'])) {
        $method = $_GET['method'];
      } else {
        $method = 'home';
      }
    
      $this->$method();      
    }

    /*Esta función comprueba que la cookie llamada color esta iniciada, si lo esta te lleva al método colores, sino te imprime el documento colores dentro de la carpeta views*/
     
    public function home()
    {

    if (isset($_COOKIE['color'])) {
      
      header('Location: index.php?method=colores');
     
    }else{
      include('views/colores.html');
        
    }
    
    
  }

    /*Esta funcion cambia la informacion de la cookie colores, luego llama al método colores*/


  public function cambio(){

    $id = $_GET['color'];

    setcookie('color', $id, time() + 60*60*2);
   
    header('Location: index.php?method=colores');

  }

    /*Esta funcion pone el fondo del body al color que tienes asignado en tu cookie de color y te imprime el archivo home de la carpeta views*/

  public function colores(){
    echo '<body style="background-color:'.$_COOKIE['color'].'">';
    include('views/home.php');
  }

  /*Esta funcion borra la cookie llamada color y te imprime el archivo colores de la carpeta views*/

  public function borrar(){
    setcookie("color", '', time() - 42000);
    include('views/colores.html');

  }

}
