<?php

  class User
  {
    public $user;
    public $smarty;

    public function __construct()
    {
      $this->user=new Usuario();
      $this->smarty=new Smarty();
    }

    public function Inicio()
    {
      $this->smarty->assign('title','Login');
      $this->smarty->display('Inicial.tpl');
    }

    public function IrLogin()
    {
      $this->smarty->assign('title','Login');
      $this->smarty->display('Login.tpl');
    }

    public function IrRegistro()
    {
      $this->smarty->assign('title','Registro');
      $this->smarty->display('Registro.tpl');
    }

    public function RegresoJefe()
    {
      $this->smarty->assign('title','Inicio');
      $this->smarty->display('VistasJefe/VistaJefe.tpl');
    }

    public function Cerrar()
    {
      $this->smarty->assign('title','Inicio');
      $this->smarty->display('Home.tpl');
    }

    public function Regreso()
    {
      $this->smarty->assign('title','Inicio');
      $this->smarty->display('Cabeceras/Inicio.tpl');
    }
    
    public function Compras()
    {
      $this->smarty->assign('title','Sueldo');
      $this->smarty->display('VistasJefe/Compras.tpl');
    }

    public function Ventas()
    {
      $this->smarty->assign('title','Login');
      $this->smarty->display('VistasJefe/Ventas.tpl');
    }

    public function BuscarUsuario()
    {
      $num=$_POST['idUsuario'];
      $pass=$_POST['Depto_idDepto'];

      $us=$this->user->BuscarUser($num,$pass);

            if($us->num_rows==1)
            {
              session_start();
              $usuario=mysqli_fetch_assoc($us);

          
              $_SESSION['idUsuario']=$usuario['Depto_idDepto'];
      
              if($usuario['Depto_idDepto']==101)
                {
                  $this->smarty->assign('title','Login');
                  $this->smarty->display('VistasJefe/Compras.tpl');
                }
              else if($usuario['Depto_idDepto']==102)
                {  
            
                  $this->smarty->assign('title','Login');
                  $this->smarty->display('VistasJefe/Ventas.tpl');
                }
               
                else if($usuario['Depto_idDepto']==123)
                {  
            
                  $this->smarty->assign('title','Login');
                  $this->smarty->display('VistasJefe/VistaJefe.tpl');
                }
            }
            else 
              {
                $this->smarty->assign('title','Login');
                $this->smarty->display('Login.tpl');
                echo "Usuario o contraseña son incorrectos";
              }
    }
   

    public function GuardarUsuario()
    {
      $Correo=$_POST['email'];
      $Nombre=$_POST['nombre'];
      $Apellido=$_POST['apellido'];
      $Contrasena=$_POST['pass'];
      $Depto_idDepto=$_POST['depto'];
      $Roles_idRoles=$_POST['cel'];
        

      $user=$this->user->GuardarUser($idUsuario, $Depto_idDepto, $Estado_idEstado, $Roles_idRoles, $Nombre, $Apellido, $Correo, $Contrasena);

      

      $this->smarty->assign('title','Login');
      $this->smarty->display('Login.tpl');
    }

   


  }
    
?>