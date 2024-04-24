<div class="container is-fluid mb-6">
	<h1 class="title">Productos</h1>
	<h2 class="subtitle">Actualizar producto</h2>
</div>

<div class="container pb-6 pt-6">
	<?php
		include "./inc2/btn_back.php";

		require_once "./php2/main2.php";

		$id = (isset($_GET['emple_equi_id_up'])) ? $_GET['emple_equi_id_up'] : 0;
		$id =limpiar_cadena($id);

		/*== Verificando producto ==*/
    	$check_producto=conexion();
    	$check_producto=$check_producto->query("SELECT * FROM emple_equipos WHERE emple_equi_id='$id'");

        if($check_producto->rowCount()>0){
        	$datos=$check_producto->fetch();
	?>

	<div class="form-rest mb-6 mt-6"></div>
	
	<h2 class="title has-text-centered"><?php echo $datos['emple_equi_id']; ?></h2>

	<form action="./php2/equi_emple_actualizar.php" method="POST" class="FormularioAjax" autocomplete="off" >

		<input type="hidden" name="emple_equi_id" value="<?php echo $datos['emple_equi_id']; ?>" required >
		<div class="columns">
				<div class="column">
				<label>Cedula</label><br>
		    	<div class="select is-rounded">
				  	<select name="emple_cedula" >
				    	<?php
    						$categorias1=conexion();
    						$categorias1=$categorias1->query("SELECT * FROM empleados");
    						if($categorias1->rowCount()>0){
    							$categorias1=$categorias1->fetchAll();
    							foreach($categorias1 as $row){
    								if($datos['emple_cedula']==$row['emple_cedula']){
    									echo '<option value="'.$row['emple_cedula'].'" selected="" >'.$row['emple_nombre'].' (Actual)</option>';
    								}else{
    									echo '<option value="'.$row['emple_cedula'].'" >'.$row['emple_nombre'].'</option>';
    								}
				    			}
				   			}
				   			$categorias1=null;
				    	?>
				  	</select>
				</div>
		  	</div>
		  	</div>
              <div class="columns">
				<div class="column">
				<label>Dotacion</label><br>
		    	<div class="select is-rounded">
				  	<select name="equi_serial" >
				    	<?php
    						$categorias2=conexion();
    						$categorias2=$categorias2->query("SELECT * FROM equipos");
    						if($categorias2->rowCount()>0){
    							$categorias2=$categorias2->fetchAll();
    							foreach($categorias2 as $row){
    								if($datos['equi_serial']==$row['equi_serial']){
    									echo '<option value="'.$row['equi_serial'].'" selected="" >'.$row['equi_descripcion'].' (Actual)</option>';
    								}else{
    									echo '<option value="'.$row['equi_serial'].'" >'.$row['equi_descripcion'].'</option>';
    								}
				    			}
				   			}
				   			$categorias2=null;
				    	?>
				  	</select>
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
		$check_producto=null;
	?>
</div>