<?php
/* Smarty version 3.1.38, created on 2021-09-28 04:24:14
  from 'C:\xampp\htdocs\Compras\Compras-Ventas-main\View\VistasJefe\Ventas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61527ccee0f6f1_11165938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd58da66657103a206155d143d1997ea6a32eeadf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Compras\\Compras-Ventas-main\\View\\VistasJefe\\Ventas.tpl',
      1 => 1632795810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_61527ccee0f6f1_11165938 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">cvalladares</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?Controller=User&method=Clientes">Clientes</a></li>
        <li><a href="?Controller=User&method=Cerrar">Cerrar</a></li>
        <li><a href="?Controller=User&method=RegresoJefe">Regresar</a></li>
      </ul>
    </div>
  </nav>

  
   <form method="post" action="?Controller=User&method=Pagoventa" class="col s12  center aling">
    <h1>Ventas de ZES Corporation</h1>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="Cliente" type="text" class="validate" name="Cliente" required=""/>
          <label for="Cliente">Codigo de Clientes</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="fechapago" type="date" class="validate" name="fechapago" required=""/>
          <label for="fechapago">Fecha de Venta</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="horapago" type="time" class="validate" name="horapago" required=""/>
          <label for="horapago">Hora de la venta</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="nocheque" type="text" class="validate" name="nocheque" required=""/>
          <label for="nocheque">Numero del Cheque o Recibo de Caja</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="valcheque" type="text" class="validate" name="valcheque" required=""/>
          <label for="valcheque">Valor del Cheque o Recibo de Caja</label>
        </div>
    </div>

         <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
  </form>

  
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
