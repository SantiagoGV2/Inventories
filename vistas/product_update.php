<div class="container is-fluid mb-6">
	<h1 class="title">Productos</h1>
	<h2 class="subtitle">Actualizar producto</h2>
</div>

<div class="container pb-6 pt-6">
	<?php
		include "./inc/btn_back.php";

		require_once "./php/main.php";

		$cod = (isset($_GET['product_id_up'])) ? $_GET['product_id_up'] : 0;
		$cod=limpiar_cadena($cod);

		/*== Verificando producto ==*/
    	$check_producto=conexion();
    	$check_producto=$check_producto->query("SELECT * FROM herramientas WHERE her_cod='$cod'");

        if($check_producto->rowCount()>0){
        	$datos=$check_producto->fetch();
	?>

	<div class="form-rest mb-6 mt-6"></div>
	
	<h2 class="title has-text-centered"><?php echo $datos['her_tipo']; ?></h2>

	<form action="./php/producto_actualizar.php" method="POST" class="FormularioAjax" autocomplete="off" >

		<input type="hidden" name="her_cod" value="<?php echo $datos['her_cod']; ?>" required >

		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Código</label>
				  	<input class="input" type="text" name="her_cod" pattern="[/^[\p{L}\s]+$/u]{1,15}" maxlength="15" required value="<?php echo $datos['her_cod']; ?>">
				</div>
		  	</div>
		</div>
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Descripcion</label>
				  	<input class="input" type="text" name="her_descripcion" pattern="[/^[\p{L}\s]+$/u]{3,100}" maxlength="100" required value="<?php echo $datos['her_descripcion']; ?>">
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Estado</label>
				  	<input class="input" type="text" name="her_estado" pattern="[/^[\p{L}\s]+$/u]{3,30}" maxlength="30" required value="<?php echo $datos['her_estado']; ?>">
				</div>
		  	</div>
			  <div class="column">
		    	<div class="control">
					<label>Fecha Entrada</label>
				  	<input class="input" type="date" name="her_fecha_entrada" pattern="[0-9]{2}[/-][0-9]{2}[/-]([0-9]{2}|[0-9]{4})" maxlength="10" required value="<?php echo $datos['her_fecha_entrada']; ?>">
				</div>
		  	</div>
			  <div class="column">
		    	<div class="control">
					<label>Fecha Entrega</label>
				  	<input class="input" type="date" name="her_fecha_entrega" pattern="[0-9]{2}[/-][0-9]{2}[/-]([0-9]{2}|[0-9]{4})" maxlength="10" required value="<?php echo $datos['her_fecha_entrega']; ?>">
				</div>
		  	</div>
		</div>
		<p class="has-text-centered">
			<button type="submit" class="button is-success is-rounded">Actualizar</button>
		</p>
	</form>
	<?php 
		}else{
			include "./inc/error_alert.php";
		}
		$check_producto=null;
	?>
</div>