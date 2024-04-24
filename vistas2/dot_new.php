<div class="container is-fluid mb-6">
	<h1 class="title">Dotaciones</h1>
	<h2 class="subtitle">Nueva Dotación</h2>
</div>

<div class="container pb-6 pt-6">
	<?php
		require_once "./php2/main2.php";
	?>

	<div class="form-rest mb-6 mt-6"></div>

	<form action="./php2/dotacion_guardar.php" method="POST" class="FormularioAjax" autocomplete="off" enctype="multipart/form-data" >
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Código</label>
				  	<input class="input" type="text" name="dot_cod" pattern="[/^[\p{L}\s]+$/u]{1,50}" maxlength="50" required >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Descripcion</label>
				  	<input class="input" type="text" name="dot_descripcion" pattern="[/^[\p{L}\s]+$/u]{3,100}" maxlength="100" required >
				</div>
		  	</div>
		</div>
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Fecha Entrega</label>
				  	<input class="input" type="date" name="dot_fecha_entrega" pattern="[0-9]{2}[/-][0-9]{2}[/-]([0-9]{2}|[0-9]{4})" maxlength="10" required >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Estado</label>
				  	<input class="input" type="text" name="dot_estado" pattern="[/^[\p{L}\s]+$/u]{3,50}" maxlength="50" required >
				</div>
		  	</div>
			  <div class="column">
		    	<div class="control">
					<label>Observacion</label>
				  	<input class="input" type="text" name="dot_observacion" pattern="[/^[\p{L}\s]+$/u]{3,150}" maxlength="150" required >
				</div>
		  	</div>
		<p class="has-text-centered">
			<button type="submit" class="button is-info is-rounded">Guardar</button>
		</p>
	</form>
</div>