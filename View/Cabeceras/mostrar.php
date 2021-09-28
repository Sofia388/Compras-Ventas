   
<?php 
$inc = include("Conexion.Model");
if ($inc) {
	$consulta = "SELECT * FROM datos";
	$resultado = mysqli_query($Codigo,$Cliente);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $Codigo = $row['Codigo'];
	    $Cliente = $row['Cliente'];
		}
	    ?>
        <div>
        	<div>
        		<p>
        			<b>Codigo: </b> <?php $Codigo ?><br>
        		    <b>Cliente: </b> <?php $Cliente ?><br>
        		</p>
        	</div>
        </div> 
	    <?php
	    }
	}
}
?>