<?php

 class Usuario
 {
 public function __construct()
        {
            $this->con=new Conexion();
        }
            
        public function BuscarUser($num, $pass)
        {
            $this->con=new Conexion();
            $sql="SELECT * FROM `trabajador` WHERE `Depto_idDepto` = '$num' AND `Contrasena`='$pass';";
            $consulta=$this->con->query($sql);
            $this->con->close();
            return $consulta;
        }

        public function GuardarUsuario($correo,$nombre,$apellido,$contrasena,$depto_idDepto)
            {
                $this->con=new Conexion();
                $sql="INSERT INTO `trabajador`(`idUsuario`, `Depto_idDepto`, `Estado_idEstado`, `Roles_idRoles`, `Nombre`, `Apellido`,`Correo`) VALUES ('$correo','$nombre','$apellido','$contrasena','$dDepto_idDepto');"; 
                $consulta=$this->con->query($sql);
                $this->con->close();
                return $consulta;
            }

        public function BuscarTipoUser()
        {
            $this->con=new Conexion();
            $sql= "SELECT * FROM 'Sistema_Chat' WHERE 1 ;";
            $consulta=$this->con->query($sql);
            $this->con->close();
            return $consulta;
        }


 }


?>
