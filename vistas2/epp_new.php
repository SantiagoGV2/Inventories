<div class="container is-fluid mb-6">
	<h1 class="title">EPPS</h1>
	<h2 class="subtitle">Nuevo EPP</h2>
</div>

<div class="container pb-6 pt-6">
	<?php
		require_once "./php2/main2.php";
	?>

	<div class="form-rest mb-6 mt-6"></div>

	<form action="./php2/epp_guardar.php" method="POST" class="FormularioAjax" autocomplete="off" enctype="multipart/form-data" >
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Codigo</label>
				  	<input class="input" type="text" name="epp_cod" pattern="[/^[\p{L}\s]+$/u]{1,20}" maxlength="20" required >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Descripcion</label>
				  	<input class="input" type="text" name="epp_descripcion" pattern="[/^[\p{L}\s]+$/u]{3,100}" maxlength="100" required >
				</div>
		  	</div>
		</div>
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Disponibilidad</label>
				  	<input class="input" type="text" name="epp_disponibilidad" pattern="[/^[\p{L}\s]+$/u]{3,50}" maxlength="50" required >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Estado</label>
				  	<input class="input" type="text" name="epp_estado" pattern="[/^[\p{L}\s]+$/u]{3,50}" maxlength="50" required >
				</div>
		  	</div>
			  <div class="column">
		    	<div class="control">
					<label>Fecha Entrega</label>
				  	<input class="input" type="date" name="epp_fecha_entrega" pattern="[0-9]{2}[/-][0-9]{2}[/-]([0-9]{2}|[0-9]{4})]" maxlength="15" required >
				</div>
		  	</div>
		<p class="has-text-centered">
			<button type="submit" class="button is-info is-rounded">Guardar</button>
		</p>
	</form>
</div>