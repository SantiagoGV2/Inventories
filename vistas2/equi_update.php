<div class="container is-fluid mb-6">
	<h1 class="title">Equipos</h1>
	<h2 class="subtitle">Actualizar Equipos</h2>
</div>

<div class="container pb-6 pt-6">
	<?php
		include "./inc2/btn_back.php";

		require_once "./php2/main2.php";

		$serial = (isset($_GET['equi_id_up'])) ? $_GET['equi_id_up'] : 0;
		$serial=limpiar_cadena($serial);

		/*== Verificando producto ==*/
    	$check_equipo=conexion();
    	$check_equipo=$check_equipo->query("SELECT * FROM equipos WHERE equi_serial='$serial'");

        if($check_equipo->rowCount()>0){
        	$datos=$check_equipo->fetch();
	?>

	<div class="form-rest mb-6 mt-6"></div>
	
	<h2 class="title has-text-centered"><?php echo $datos['equi_descripcion']; ?></h2>

	<form action="./php2/equipo_actualizar.php" method="POST" class="FormularioAjax" autocomplete="off" >

		<input type="hidden" name="equi_serial" value="<?php echo $datos['equi_serial']; ?>" required >

		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Serial</label>
				  	<input class="input" type="text" name="equi_serial" pattern="[/^[\p{L}\s]+$/u]{1,50}" maxlength="50" required value="<?php echo $datos['equi_serial']; ?>">
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Numero de Salida</label>
				  	<input class="input" type="text" name="equi_numero_salida" pattern="[/^[\p{L}\s]+$/u]{3,30}" maxlength="30" required value="<?php echo $datos['equi_numero_salida']; ?>">
				</div>
		  	</div>
		</div>
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Fecha Entrega</label>
				  	<input class="input" type="date" name="equi_fecha_entrega" pattern="[0-9]{2}[/-][0-9]{2}[/-]([0-9]{2}|[0-9]{4})" maxlength="10" required value="<?php echo $datos['equi_fecha_entrega']; ?>">
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Descripcion</label>
				  	<input class="input" type="text" name="equi_descripcion" pattern="[/^[\p{L}\s]+$/u]{3,150}" maxlength="150" required value="<?php echo $datos['equi_descripcion']; ?>">
				</div>
				<div class="column">
		    	<div class="control">
					<label>Estado</label>
				  	<input class="input" type="text" name="equi_estado" pattern="[/^[\p{L}\s]+$/u]{3,50}" maxlength="50" required value="<?php echo $datos['equi_estado']; ?>">
				</div>
		  	</div>
		<p class="has-text-centered">
			<button type="submit" class="button is-success is-rounded">Actualizar</button>
		</p>
	</form>
	<?php 
		}else{
			include "./inc2/error_alert.php";
		}
		$check_equipo=null;
	?>
</div>