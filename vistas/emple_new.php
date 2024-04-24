<div class="container is-fluid mb-6">
	<h1 class="title">Empleados</h1>
	<h2 class="subtitle">Nuevo empleado</h2>
</div>

<div class="container pb-6 pt-6">
	<?php
		require_once "./php/main.php";
	?>

	<div class="form-rest mb-6 mt-6"></div>

	<form action="./php/empleado_guardar.php" method="POST" class="FormularioAjax" autocomplete="off" enctype="multipart/form-data" >
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Cedula</label>
				  	<input class="input" type="number" name="emple_cedula" pattern="[/^[0-9]+$/]{1,11}" maxlength="11" required >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Nombre</label>
				  	<input class="input" type="text" name="emple_nombre" pattern="[/^[\p{L}\s]+$/u]{3,100}" maxlength="100" required >
				</div>
		  	</div>
		</div>
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Primer Apellido</label>
				  	<input class="input" type="text" name="emple_primer_apellido" pattern="[/^[\p{L}\s]+$/u]{3,50}" maxlength="50" required >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Segundo Apellido</label>
				  	<input class="input" type="text" name="emple_segundo_apellido" pattern="[/^[\p{L}\s]+$/u]{3,50}" maxlength="50" required >
				</div>
		  	</div>
			  <div class="column">
		    	<div class="control">
					<label>Estado</label>
				  	<input class="input" type="text" name="emple_estado" pattern="[/^[\p{L}\s]+$/u]{3,30}" maxlength="30" required >
				</div>
		  	</div>
			  <div class="column">
		    	<div class="control">
					<label>Cargo</label>
				  	<input class="input" type="text" name="emple_cargo" pattern="[/^[\p{L}\s]+$/u]{3,30}" maxlength="30" required >
				</div>
		  	</div>
			  <div class="column">
		    	<div class="control">
					<label>Telefono</label>
				  	<input class="input" type="text" name="emple_telefono" pattern="[/^[\p{L}\s]+$/u]{3,11}" maxlength="11" required >
				</div>
		  	</div>
		  	<div class="column">
				<label>Dotacion</label><br>
		    	<div class="select is-rounded">
				  	<select name="dot_cod" >
				    	<option value="" selected="" >Seleccione una opción</option>
				    	<?php
    						$categorias=conexion();
    						$categorias=$categorias->query("SELECT * FROM dotaciones");
    						if($categorias->rowCount()>0){
    							$categorias=$categorias->fetchAll();
    							foreach($categorias as $row){
    								echo '<option value="'.$row['dot_cod'].'" >'.$row['dot_descripcion'].'</option>';
				    			}
				   			}
				   			$categorias=null;
				    	?>
				  	</select>
				</div>
		  	</div>
			  <div class="column">
				<label>Usuario</label><br>
		    	<div class="select is-rounded">
				  	<select name="usu_id" >
				    	<option value="" selected="" >Seleccione una opción</option>
				    	<?php
    						$categorias=conexion();
    						$categorias=$categorias->query("SELECT * FROM usuarios");
    						if($categorias->rowCount()>0){
    							$categorias=$categorias->fetchAll();
    							foreach($categorias as $row){
    								echo '<option value="'.$row['usu_id'].'" >'.$row['usu_nombre'].'</option>';
				    			}
				   			}
				   			$categorias=null;
				    	?>
				  	</select>
				</div>
		  	</div>
			
		</div>
		<p class="has-text-centered">
			<button type="submit" class="button is-info is-rounded">Guardar</button>
		</p>
	</form>
</div>