<?php

class App
{

    /*Este constructor tiene información que no es muy necesaria pero lo usé de prueba para los sigueintes ejercicios.*/

    public function __construct($name)
    {
        $this->name = $name;
        $this->ejercicio = "cálculos matemáticos";
    }

    /*Esta función la ejecuto en el index principal, el que esta fuera de la carpeta views, sirve para redireccionar a otras funciones de
    la clase.*/

    public function run()
    {
        if (isset($_GET['method'])) 
        {

            $method = $_GET['method'];
    
        } 
        else 
        {

            $method = 'index';
            

        }
        $this->$method();
    }

    /*Esta función muestra la información del index de la carpeta views.*/

    public function index()
    {
      include('views/index.php');
    }

    /*Esta función muestra la información del header y muestra la sucesion de fibonacci después.*/

    public function fibonacci()
    {
        include('views/header.html');
        echo"<hr>";

        $suma;
        $term1 = 0;
        $term2 = 1;


        echo "<br>$term1<br>$term2<br>";
        for($i = 0;$suma < 1000000;$i++)
        {

                $suma = $term1 + $term2;
                if($suma <= 1000000)
                {
                    echo "$suma<br>";
                    $term1 = $term2;
                    $term2 = $suma;
                }
            

        }
    }   

    /*Esta función muestra la información del header y muestra las potencias de dos hasta 2²⁴ después.*/

    public function potencia()
    {
        include('views/header.html');
        echo('<hr><br>');

        $num = 1;
        for($i=1;$i<=24;$i++)
        {  
            $num = $num*2;
            echo"2^$i= $num<br>";
        }
    
    }

    /*Esta función muestra la información del header y muestra los factoriales 
    hasta que el resultado sea igual o mayor que un millón después.*/

    public function factorial()
    {
        include('views/header.html');
        echo"<hr><br>";
        $num = 1;
        echo"0! = 1 <br>";
        for($i=1;$num<1000000;$i++)
        {
            $num = $num*$i;   
            
            if($num <=1000000)
            {
            echo"$i! = ";
            echo"$num<br>";
            }
        }
    
    }

    /*Esta función muestra la información del header y muestra todos los primos hasta el 10000 después.*/

    public function primos()
    {
        include('views/header.html');
        echo"<hr><br>";

        for($i = 2;$i < 10000; $i++)
        {
            $primo = true;
            for ($j=2; $j < $i; $j++) 
            { 
                
                if($i % $j == 0)
                {
                    $primo = false;
                }
                
            }
            if($primo)
                {
                    echo"$i<br>";
                }
        }
    }   
}    
?>