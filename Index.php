<?php



    require_once ('AutoLoad.php');

    if(isset($_GET['Controller']) && isset($_GET['method']))
    {
        $Controller=$_GET['Controller'];
        $method=$_GET['method'];
    }
    else
    {
       $Controller="Home";
       $method="Inicio";
    }

    if(class_exists($Controller) && method_exists($Controller,$method))
    {

        $class=new $Controller;
        $class->$method();

    }
    else
    {
        echo "clase no existe o el metodo es incorrecto";
    }
?>