<?php
/* Smarty version 3.1.38, created on 2021-09-17 03:33:07
  from 'C:\xampp\htdocs\Compras\Compras-Ventas-main\View\Cabeceras\Inicio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6143f053a640f6_74219290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb2f9293abd0dbed4c4f2e07397319b6fbf027ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Compras\\Compras-Ventas-main\\View\\Cabeceras\\Inicio.tpl',
      1 => 1631842382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_6143f053a640f6_74219290 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo"> Inicio</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?Controller=User&method=IrRegistro">Registro</a></li>
        <li><a href="?Controller=User&method=IrLogin">Login</a></li>
      </ul>
    </div>
  </nav>


 <div id="titulo">
				<h1>Bienvenidos</h1>
			</div>


 <div class="carousel">
    <a class="carousel-item" href="#one!"><img src="Boceto/asesoria.jpg"></a>
    <a class="carousel-item" href="#two!"><img src="Boceto/cierre.jpg"></a>
    <a class="carousel-item" href="#three!"><img src="Boceto/AREA.jpg"></a>
  </div>



<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
