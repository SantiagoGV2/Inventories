<div class="container is-fluid mb-6">
	<h1 class="title">Dotaciones</h1>
	<h2 class="subtitle">Actualizar Dotacion</h2>
</div>

<div class="container pb-6 pt-6">
	<?php
		include "./inc/btn_back.php";

		require_once "./php/main.php";

		$codigo = (isset($_GET['dotacion_id_up'])) ? $_GET['dotacion_id_up'] : 0;
		$codigo=limpiar_cadena($codigo);

		/*== Verificando producto ==*/
    	$check_dotacion=conexion();
    	$check_dotacion=$check_dotacion->query("SELECT * FROM dotaciones WHERE dot_cod='$codigo'");

        if($check_dotacion->rowCount()>0){
        	$datos=$check_dotacion->fetch();
	?>

	<div class="form-rest mb-6 mt-6"></div>
	
	<h2 class="title has-text-centered"><?php echo $datos['dot_descripcion']; ?></h2>

	<form action="./php/dotacion_actualizar.php" method="POST" class="FormularioAjax" autocomplete="off" >

		<input type="hidden" name="dot_cod" value="<?php echo $datos['dot_cod']; ?>" required >

		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Código</label>
				  	<input class="input" type="text" name="dot_cod" pattern="[/^[\p{L}\s]+$/u]{1,50}" maxlength="50" required value="<?php echo $datos['dot_cod']; ?>">
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Descripcion</label>
				  	<input class="input" type="text" name="dot_descripcion" pattern="[/^[\p{L}\s]+$/u]{3,100}" maxlength="100" required value="<?php echo $datos['dot_descripcion']; ?>">
				</div>
		  	</div>
		</div>
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Fecha Entrega</label>
				  	<input class="input" type="date" name="dot_fecha_entrega" pattern="[0-9]{2}[/-][0-9]{2}[/-]([0-9]{2}|[0-9]{4})" maxlength="10" required value="<?php echo $datos['dot_fecha_entrega']; ?>">
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Estado</label>
				  	<input class="input" type="text" name="dot_estado" pattern="[/^[\p{L}\s]+$/u]{3,50}" maxlength="50" required value="<?php echo $datos['dot_estado']; ?>">
				</div>
		  	</div>
			  <div class="column">
		    	<div class="control">
					<label>Observacion</label>
				  	<input class="input" type="text" name="dot_observacion" pattern="[/^[\p{L}\s]+$/u]{3,150}" maxlength="150" required value="<?php echo $datos['dot_observacion']; ?>">
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
		$check_dotacion=null;
	?>
</div>