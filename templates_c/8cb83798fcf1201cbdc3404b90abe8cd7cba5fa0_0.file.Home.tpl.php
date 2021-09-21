<?php
/* Smarty version 3.1.38, created on 2021-09-08 16:31:18
  from 'C:\xampp\htdocs\Compras\Compras-Ventas-main\View\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6138c93605bbc9_15500019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cb83798fcf1201cbdc3404b90abe8cd7cba5fa0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Compras\\Compras-Ventas-main\\View\\Home.tpl',
      1 => 1631110923,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 2,
    'file:Cabeceras/Inicio.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_6138c93605bbc9_15500019 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if ((isset($_smarty_tpl->tpl_vars['pagina']->value))) {?>
    <?php if ($_smarty_tpl->tpl_vars['pagina']->value == "Login") {?>
      <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php }?>



<?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Inicio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>


<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
