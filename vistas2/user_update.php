<?php
	require_once "./php2/main2.php";

    $id = (isset($_GET['user_id_up'])) ? $_GET['user_id_up'] : 0;
    $id=limpiar_cadena($id);
?>
<div class="container is-fluid mb-6">
	<?php if($id==$_SESSION['id']){ ?>
		<h1 class="title">Mi cuenta</h1>
		<h2 class="subtitle">Actualizar datos de cuenta</h2>
	<?php }else{ ?>
		<h1 class="title">Usuarios</h1>
		<h2 class="subtitle">Actualizar usuario</h2>
	<?php } ?>
</div>

<div class="container pb-6 pt-6">
	<?php

		include "./inc2/btn_back.php";

        /*== Verificando usuario ==*/
    	$check_usuario=conexion();
    	$check_usuario=$check_usuario->query("SELECT * FROM usuarios WHERE usu_id='$id'");

        if($check_usuario->rowCount()>0){
        	$datos=$check_usuario->fetch();
	?>

	<div class="form-rest mb-6 mt-6"></div>

	<form action="./php2/usuario_actualizar.php" method="POST" class="FormularioAjax" autocomplete="off" >

		<input type="hidden" name="usu_id" value="<?php echo $datos['usu_id']; ?>" required >
		
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Nombres</label>
				  	<input class="input" type="text" name="usu_nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,100}" maxlength="100" required value="<?php echo $datos['usu_nombre']; ?>" >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Primer Apellidos</label>
				  	<input class="input" type="text" name="usu_apellido" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,100}" maxlength="100" required value="<?php echo $datos['usu_primer_apellido']; ?>" >
				</div>
		  	</div>
              <div class="column">
		    	<div class="control">
					<label>Segundo Apellidos</label>
				  	<input class="input" type="text" name="usu_apellido" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,100}" maxlength="100" required value="<?php echo $datos['usu_segundo_apellido']; ?>" >
				</div>
		  	</div>
		</div>
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Usuario</label>
				  	<input class="input" type="text" name="usu_usuario" pattern="[a-zA-Z0-9]{4,100}" maxlength="100" required value="<?php echo $datos['usu_usuario']; ?>" >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Email</label>
				  	<input class="input" type="email" name="usu_email" maxlength="100" value="<?php echo $datos['usu_email']; ?>" >
				</div>
		  	</div>
		</div>
		<br><br>
		<p class="has-text-centered">
			SI desea actualizar la clave de este usuario por favor llene los 2 campos. Si NO desea actualizar la clave deje los campos vacíos.
		</p>
		<br>
		<div class="columns">
			<div class="column">
		    	<div class="control">
					<label>Clave</label>
				  	<input class="input" type="password" name="usuario_clave_1" pattern="[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/]" maxlength="100" >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Repetir clave</label>
				  	<input class="input" type="password" name="usuario_clave_2" pattern="[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/]" maxlength="100" >
				</div>
		  	</div>
		</div>
		<br><br><br>
		<p class="has-text-centered">
			Para poder actualizar los datos de este usuario por favor ingrese su USUARIO y CLAVE con la que ha iniciado sesión
		</p>
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Usuario</label>
				  	<input class="input" type="text" name="administrador_usuario" pattern="[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/]" maxlength="100" required >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Clave</label>
				  	<input class="input" type="password" name="administrador_clave" pattern="[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/]" maxlength="100" required >
				</div>
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
		$check_usuario=null;
	?>
</div>