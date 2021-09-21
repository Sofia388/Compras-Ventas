<?php
    class Conexion extends mysqli
    {
        function __construct()
        {
        $servidor="sql208.byethost10.com";
        $user="b10_27746189";
        $pass="XJLQkA_F8i5M9";
        $BaseDatos="b10_27746189_ComprasVentas";

        parent:: __construct($servidor,$user,$pass,$BaseDatos);
        $this->query("SET NAMES 'utf8';");
        $this-> connect_errno ? die('Error en la conexion'): $error='</br> Conectado';
        //echo $error;
        unset($error);

        }
        
    }
?>
