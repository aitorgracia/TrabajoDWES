<?php

class app
{
    public function __construct($name = "Ejercicio 17")
    {
        $this->name = $name;
        $this->ejercicio = "cálculos matemáticos";
    }

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

    public function index()
    {
      include('views/index.php');
    }

    public function fibonacci()
    {
        include('views/header.php');
        echo('<hr>');

        $suma;
        $term1 = 0;
        $term2 = 1;


        echo '<br>'.$term1.'<br>'.$term2.'<br>';
        for($i = 0;$suma < 1000000;$i++)
        {

                $suma = $term1 + $term2;
                if($suma <= 1000000)
                {
                    echo $suma.'<br>';
                    $term1 = $term2;
                    $term2 = $suma;
                }
            

        }
    }   

    public function potencia()
    {
        include('views/header.php');
        echo('<hr><br>');

        for($i=1;$i<=24;$i++)
        {
            $num = 1;
            for($j=0;$j<=$i;$j++)
            {
                
                $num = $num*2;

            }
            echo($num.'<br>');
        }
    
    }

    public function factorial()
    {
        include('views/header.php');
        echo('<hr><br>');
        $num = 1;
        echo('0! = 1 <br>');
        for($i=1;$num<1000000;$i++)
        {
            $num = $num*$i;   
            
            if($num <=1000000)
            {
            echo($i.'! = ');
            echo($num.'<br>');
            }
        }
    
    }

    public function primos()
    {
        include('views/header.php');
        echo('<hr><br>');

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
                    echo($i.'<br>');
                }
        }
    }   
}    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/default.css">
    </head>
</html>