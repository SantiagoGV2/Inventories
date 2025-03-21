<div class="container is-fluid mb-6">
	<h1 class="title">Usuarios</h1>
	<h2 class="subtitle">Nuevo usuario</h2>
</div>
<div class="container pb-6 pt-6">

	<div class="form-rest mb-6 mt-6"></div>

	<form action="./php/usuario_guardar.php" method="POST" class="FormularioAjax" autocomplete="off" >
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Nombre</label>
				  	<input class="input" type="text" name="usu_nombre" pattern="[/^[\p{L}\s]+$/u]{3,100}" maxlength="100" required >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Primer Apellido</label>
				  	<input class="input" type="text" name="usu_primer_apellido" pattern="[/^[\p{L}\s]+$/u]{3,100}" maxlength="100" required >
				</div>
		  	</div>
              <div class="column">
		    	<div class="control">
					<label>Segundo Apellidos</label>
				  	<input class="input" type="text" name="usu_segundo_apellido" pattern="[/^[\p{L}\s]+$/u]{3,100}" maxlength="100" required >
				</div>
		  	</div>
		</div>
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Usuario</label>
				  	<input class="input" type="text" name="usu_usuario" pattern="[/^[\p{L}\s]+$/u]{3,100}" maxlength="100" required >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Email</label>
				  	<input class="input" type="email" name="usu_email" maxlength="100" >
				</div>
		  	</div>
		</div>
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Clave</label>
				  	<input class="input" type="password" name="usuario_clave_1" pattern="[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/]" maxlength="100" required >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Repetir clave</label>
				  	<input class="input" type="password" name="usuario_clave_2" pattern="[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/]" maxlength="100" required >
				</div>
		  	</div>
		</div>
		<p class="has-text-centered">
			<button type="submit" class="button is-info is-rounded">Guardar</button>
		</p>
	</form>
</div>