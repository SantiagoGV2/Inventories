<div class="container is-fluid mb-6">
	<h1 class="title">Equipos</h1>
	<h2 class="subtitle">Nuevo Equipo</h2>
</div>

<div class="container pb-6 pt-6">
	<?php
		require_once "./php2/main2.php";
	?>

	<div class="form-rest mb-6 mt-6"></div>

	<form action="./php2/equipo_guardar.php" method="POST" class="FormularioAjax" autocomplete="off" enctype="multipart/form-data" >
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Serial</label>
				  	<input class="input" type="text" name="equi_serial" pattern="[/^[\p{L}\s]+$/u]{1,50}" maxlength="50" required >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Numero de Salida</label>
				  	<input class="input" type="text" name="equi_numero_salida" pattern="[/^[\p{L}\s]+$/u]{3,30}" maxlength="30" required >
				</div>
		  	</div>
		</div>
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Fecha Entrega</label>
				  	<input class="input" type="date" name="equi_fecha_entrega" pattern="[0-9]{2}[/-][0-9]{2}[/-]([0-9]{2}|[0-9]{4})" maxlength="10" required >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Descripcion</label>
				  	<input class="input" type="text" name="equi_descripcion" pattern="[/^[\p{L}\s]+$/u]{3,150}" maxlength="150" required >
				</div>
		  	</div>
			  <div class="column">
		    	<div class="control">
					<label>Estado</label>
				  	<input class="input" type="text" name="equi_estado" pattern="[/^[\p{L}\s]+$/u]{3,50}" maxlength="50" required >
				</div>
		  	</div>
		<p class="has-text-centered">
			<button type="submit" class="button is-info is-rounded">Guardar</button>
		</p>
	</form>
</div>