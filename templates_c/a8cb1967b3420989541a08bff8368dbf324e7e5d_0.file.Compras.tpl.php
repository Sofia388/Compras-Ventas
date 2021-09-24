<?php
/* Smarty version 3.1.38, created on 2021-09-24 06:19:16
  from 'C:\xampp\htdocs\Compras\Compras-Ventas-main\View\VistasJefe\Compras.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_614d51c4b5ecb9_37595675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8cb1967b3420989541a08bff8368dbf324e7e5d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Compras\\Compras-Ventas-main\\View\\VistasJefe\\Compras.tpl',
      1 => 1632455942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_614d51c4b5ecb9_37595675 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">cvalladares</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?Controller=User&method=Cerrar">Cerrar</a></li>
        <li><a href="?Controller=User&method=RegresoJefe">Regresar</a></li>
      </ul>
    </div>
  </nav>

    <form method="post" action="?Controller=User&method=Pagocompra" class="col s12  center aling">
    <h1>Compras de ZES Corporation</h1>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="Proveedores" type="text" class="validate" name="Proveedores" required=""/>
          <label for="Proveedores">Codigo de Proveedores</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="fechapago" type="data" class="validate" name="fechapago" required=""/>
          <label for="fechapago">Fecha de Compra</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="horapago" type="text" class="validate" name="horapago" required=""/>
          <label for="horapago">Hora de la Compra</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="nocheque" type="text" class="validate" name="nocheque" required=""/>
          <label for="nocheque">Numero del Cheque o nota de credito</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="valcheque" type="text" class="validate" name="valcheque" required=""/>
          <label for="valcheque">Valor del Cheque o nota de credito</label>
        </div>
    </div>

         <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
  </form>

<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
