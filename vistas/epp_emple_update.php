<div class="container is-fluid mb-6">
	<h1 class="title">EPPS</h1>
	<h2 class="subtitle">Actualizar EPP</h2>
</div>

<div class="container pb-6 pt-6">
	<?php
		include "./inc/btn_back.php";

		require_once "./php/main.php";

		$id = (isset($_GET['emple_epp_id_up'])) ? $_GET['emple_epp_id_up'] : 0;
		$id =limpiar_cadena($id);

		/*== Verificando producto ==*/
    	$check_producto=conexion();
    	$check_producto=$check_producto->query("SELECT * FROM emple_epps WHERE emple_epp_id='$id'");

        if($check_producto->rowCount()>0){
        	$datos=$check_producto->fetch();
	?>

	<div class="form-rest mb-6 mt-6"></div>
	
	<h2 class="title has-text-centered"><?php echo $datos['emple_epp_id']; ?></h2>

	<form action="./php/epp_emple_actualizar.php" method="POST" class="FormularioAjax" autocomplete="off" >

		<input type="hidden" name="emple_epp_id" value="<?php echo $datos['emple_epp_id']; ?>" required >
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
				<label>EPP</label><br>
		    	<div class="select is-rounded">
				  	<select name="epp_cod" >
				    	<?php
    						$categorias2=conexion();
    						$categorias2=$categorias2->query("SELECT * FROM epps");
    						if($categorias2->rowCount()>0){
    							$categorias2=$categorias2->fetchAll();
    							foreach($categorias2 as $row){
    								if($datos['epp_cod']==$row['epp_cod']){
    									echo '<option value="'.$row['epp_cod'].'" selected="" >'.$row['epp_descripcion'].' (Actual)</option>';
    								}else{
    									echo '<option value="'.$row['epp_cod'].'" >'.$row['epp_descripcion'].'</option>';
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
			include "./inc/error_alert.php";
		}
		$check_producto=null;
	?>
</div>