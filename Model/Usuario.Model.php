<?php

 class Usuario
 {
 public function __construct()
        {
            $this->con=new Conexion();
        }
            
        public function BuscarUser($numU, $pass)
        {
            $this->con=new Conexion();
            $sql="SELECT * FROM `usuario` WHERE `idUsuario` = '$numU' AND `Depto_idDepto`='$pass';";
            $consulta=$this->con->query($sql);
            $this->con->close();
            return $consulta;
        }

        public function GuardarUsuario($correo,$nombre,$apellido,$contrasena,$depto_idDepto)
            {
                $this->con=new Conexion();
                $sql="INSERT INTO `usuario`(`idUsuario`, `Depto_idDepto`, `Estado_idEstado`, `Roles_idRoles`, `Nombre`, `Apellido`,`Correo`) VALUES ('$correo','$nombre','$apellido','$contrasena','$dDepto_idDepto');";
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

        public function Pagocompra($Proveedores,$fecha,$hora,$noCheque,$valorcheque)
        {
            $this->con=new Conexion();
            $sql="INSERT INTO `pagocompra`(`Trabajador_Usuario`, `Fecha`, `Hora`, `Cheque`, `ValordeCheque`) VALUES ('$Proveedores','$fecha','$hora','$noCheque','$valorcheque');";
            $consulta=$this->con->query($sql);
            $this->con->close();
            return $consulta;
        }

       
        
        public function Pagoventa($Cliente,$fecha,$hora,$noCheque,$valorcheque)
        {
            $this->con=new Conexion();
            $sql="INSERT INTO `pagoventa`(`Trabajador_Usuarios`, `Fecha`, `Hora`, `Cheque`, `ValordeCheque`) VALUES ('$Cliente','$fecha','$hora','$noCheque','$valorcheque');";
            $consulta=$this->con->query($sql);
            $this->con->close();
            return $consulta;
        }


         public function CrearCodigo($Codigo, $Cliente)
        {
            $this->con=new Conexion();
            $sql="INSERT INTO `cliente` (`Codigo`, `Cliente`) VALUES ('$Codigo','$Cliente');";
            $consulta=$this->con->query($sql);
            $this->con->close();
            return $consulta;
        }
         

         public function CrearCodigop($Codigo, $Proveedores)
        {
            $this->con=new Conexion();
            $sql="INSERT INTO `proveedores` (`Codigo`, `Proveedores`) VALUES ('$Codigo','$Proveedores');";
            $consulta=$this->con->query($sql);
            $this->con->close();
            return $consulta;
        }


 }


?>
