<?php
/* Smarty version 3.1.38, created on 2021-09-22 05:18:25
  from 'C:\xampp\htdocs\Compras\Compras-Ventas-main\View\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_614aa081cb7609_80919658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc4703026d28689bf5deb5ecebfe2af8465ef271' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Compras\\Compras-Ventas-main\\View\\Login.tpl',
      1 => 1632280703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_614aa081cb7609_80919658 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo"> Inicio</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?Controller=User&method=Regreso">Regresar</a></li>
        <li><a href="?Controller=User&method=IrRegistro">Registro</a></li>
      </ul>
    </div>
  </nav>


<div>
    <h1 align="center">Login</h1>
</div>
    <div class="row">
    <form  method="post" action="?Controller=User&method=BuscarUser" class="col s12">

    <div class="row" >
        <div class="input-field col s6 s2 row offset-s2 center aling" >
          <input id="idUsuario" type="text" class="validate" name="idUsuario" required=""/>
          <label for="idUsuario">Usuario</label>
        </div>
    </div>

      <div class="row" class="center-align">
         <div class="input-field col s6 row offset-s2 center aling">
             <input id="Depto_idDepto" type="text" class="validate" name="Depto_idDepto" required=""/>
             <label for="Depto_idDepto">Password</label>
            </div>
      </div>

      <div class="row" class="center-align">
            <div class="input-field col s6 row offset-s2 center aling">
                <input class="btn waves-effect waves-light" type="submit" name="action"/>
            </div>
      </div>

    </form>

</div>


<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
