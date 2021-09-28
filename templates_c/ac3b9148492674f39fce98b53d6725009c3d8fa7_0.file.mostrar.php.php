<?php
/* Smarty version 3.1.38, created on 2021-09-28 05:50:27
  from 'C:\xampp\htdocs\Compras\Compras-Ventas-main\View\Cabeceras\mostrar.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_615291037ed155_31651429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac3b9148492674f39fce98b53d6725009c3d8fa7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Compras\\Compras-Ventas-main\\View\\Cabeceras\\mostrar.php',
      1 => 1632801025,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615291037ed155_31651429 (Smarty_Internal_Template $_smarty_tpl) {
?>   
<?php echo '<?php 
';?>
$inc = include("Conexion.Model");
if ($inc) {
	$consulta = "SELECT * FROM datos";
	$resultado = mysqli_query($Codigo,$Cliente);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $Codigo = $row['Codigo'];
	    $Cliente = $row['Cliente'];
		}
	    <?php echo '?>';?>

        <div>
        	<div>
        		<p>
        			<b>Codigo: </b> <?php echo '<?php ';?>
$Codigo <?php echo '?>';?>
<br>
        		    <b>Cliente: </b> <?php echo '<?php ';?>
$Cliente <?php echo '?>';?>
<br>
        		</p>
        	</div>
        </div> 
	    <?php echo '<?php
	    ';?>
}
	}
}
<?php echo '?>';
}
}
