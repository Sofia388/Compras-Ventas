<?php
/* Smarty version 3.1.38, created on 2021-09-24 05:08:40
  from 'C:\xampp\htdocs\Compras\Compras-Ventas-main\View\VistasJefe\VistaJefe.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_614d41385f3e15_85852717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7280d04299adf0b09de2e5d0bcd0089493e0fc42' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Compras\\Compras-Ventas-main\\View\\VistasJefe\\VistaJefe.tpl',
      1 => 1632189066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_614d41385f3e15_85852717 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Bienvenido Jefe</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?Controller=User&method=Cerrar">Cerrar</a></li>
        <li><a href="?Controller=User&method=RegresoJefe">Regresar</a></li>
      </ul>
    </div>
  </nav>

    <form method="post" action="?Controller=User&method=Compras" class="col s12  center aling">
        <h5>Compras</h5>
        <button class="btn waves-effect waves-light" type="submit" name="action">Ver</button>
    </form>

   
    <form method="post" action="?Controller=User&method=Ventas" class="col s12  center aling">
        <h5>Ventas</h5>
        <button class="btn waves-effect waves-light" type="submit" name="action">Ver</button>
    </form>




<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
