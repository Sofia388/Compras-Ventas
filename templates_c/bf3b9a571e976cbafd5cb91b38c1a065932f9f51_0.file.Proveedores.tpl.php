<?php
/* Smarty version 3.1.38, created on 2021-09-28 05:42:19
  from 'C:\xampp\htdocs\Compras\Compras-Ventas-main\View\VistasJefe\Proveedores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61528f1b3aff17_31273665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf3b9a571e976cbafd5cb91b38c1a065932f9f51' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Compras\\Compras-Ventas-main\\View\\VistasJefe\\Proveedores.tpl',
      1 => 1632800522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
  ),
),false)) {
function content_61528f1b3aff17_31273665 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Clientes</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?Controller=User&method=Cerrar">Cerrar</a></li>
        <li><a href="?Controller=User&method=Compra">Regresar</a></li>
      </ul>
    </div>
  </nav>
  
  <form method="post" action="?Controller=User&method=CrearCodigop" class="col s12  center aling">
    <h1>Crear codigo de Proveedor</h1>

    <div class="row">
        <div class="input-field col s6 s2 row offset-s2">
          <input id="pro" type="text" class="validate" name="pro" requiered=""/>
          <label for="pro">Nombre del Proveedor</label>
        </div>
    </div>

    <div class="input-field col s6 s2 row offset-s2">
     <input id="codi" type="text" class="validate" name="codi" required=""/>
     <label for="codi">Codigo del Proveedor</label>

         <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
  </form>


 <table>
     <thead>
       <tr>
         <td>Codigo del Proveedor</td>
         <td>Nombre del Proveedor</td>
       </tr>
     </thead>



     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cliente']->value, 'slv');
$_smarty_tpl->tpl_vars['slv']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slv']->value) {
$_smarty_tpl->tpl_vars['slv']->do_else = false;
?>



    <tbody>
      <tr>
         <td><?php echo $_smarty_tpl->tpl_vars['slv']->value['Codigo'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['slv']->value['Proveedores'];?>
</td>
      </tr>
    </tbody>



    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</table><?php }
}
