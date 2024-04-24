<div class="container is-fluid mb-6">
	<h1 class="title">EPPS Empleados</h1>
	<h2 class="subtitle">Asignar EPP</h2>
</div>

<div class="container pb-6 pt-6">
	<?php
		require_once "./php2/main2.php";
	?>

	<div class="form-rest mb-6 mt-6"></div>

	<form action="./php2/epp_emple_guardar.php" method="POST" class="FormularioAjax" autocomplete="off" enctype="multipart/form-data" >
		<div class="columns">
		  	<div class="column">
				<label>Cedula</label><br>
		    	<div class="select is-rounded">
				  	<select name="emple_cedula" >
				    	<option value="" selected="" >Seleccione una opción</option>
				    	<?php
    						$categorias1=conexion();
    						$categorias1=$categorias1->query("SELECT * FROM empleados");
    						if($categorias1->rowCount()>0){
    							$categorias1=$categorias1->fetchAll();
    							foreach($categorias1 as $row){
    								echo '<option value="'.$row['emple_cedula'].'" >'.$row['emple_cedula'].'</option>';
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
				    	<option value="" selected="" >Seleccione una opción</option>
				    	<?php
    						$categorias2=conexion();
    						$categorias2=$categorias2->query("SELECT * FROM epps");
    						if($categorias2->rowCount()>0){
    							$categorias2=$categorias2->fetchAll();
    							foreach($categorias2 as $row){
    								echo '<option value="'.$row['epp_cod'].'" >'.$row['epp_descripcion'].'</option>';
				    			}
				   			}
				   			$categorias2=null;
				    	?>
				  	</select>
				</div>
		  	</div>
			
		<p class="has-text-centered">
			<button type="submit" class="button is-info is-rounded">Guardar</button>
		</p>
	</form>
</div>