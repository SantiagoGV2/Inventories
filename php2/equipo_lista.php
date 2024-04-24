<?php
	$inicio = ($pagina>0) ? (($pagina * $registros)-$registros) : 0;
	$tabla="";

	if(isset($busqueda) && $busqueda!=""){

		$consulta_datos="SELECT * FROM equipos WHERE ((equi_serial AND equi_serial LIKE '%$busqueda%' OR equi_estado LIKE '%$busqueda%' OR equi_descripcion LIKE '%$busqueda%' OR equi_numero_salida LIKE '%$busqueda%')) ORDER BY equi_descripcion ASC LIMIT $inicio,$registros";

		$consulta_total="SELECT COUNT(equi_serial) FROM equipos WHERE equi_serial AND ((equi_serial LIKE '%$busqueda%' OR equi_estado LIKE '%$busqueda%' OR equi_descripcion LIKE '%$busqueda%' OR equi_numero_salida LIKE '%$busqueda%'))";

	}else{

		$consulta_datos="SELECT * FROM equipos WHERE equi_serial ORDER BY equi_descripcion ASC LIMIT $inicio,$registros";

		$consulta_total="SELECT COUNT(equi_serial) FROM equipos WHERE equi_serial";
		
	}

	$conexion=conexion();

	$datos = $conexion->query($consulta_datos);
	$datos = $datos->fetchAll();

	$total = $conexion->query($consulta_total);
	$total = (int) $total->fetchColumn();

	$Npaginas =ceil($total/$registros);

	$tabla.='
	<div class="table-container">
        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
            <thead>
                <tr class="has-text-centered">
                	<th>Serial</th>
                    <th>Numero de Salida</th>
                    <th>Fecha Entrega</th>
                    <th>Descripcion</th>
					<th>Estado</th>
                    <th colspan="2">Opciones</th>
                </tr>
            </thead>
            <tbody>
	';

	if($total>=1 && $pagina<=$Npaginas){
		$contador=$inicio+1;
		$pag_inicio=$inicio+1;
		foreach($datos as $rows){
			$tabla.='
				<tr class="has-text-centered" >
					<td>'.$rows['equi_serial'].'</td>
                    <td>'.$rows['equi_numero_salida'].'</td>
                    <td>'.$rows['equi_fecha_entrega'].'</td>
					<td>'.$rows['equi_descripcion'].'</td>
					<td>'.$rows['equi_estado'].'</td>
                    <td>
					<a href="index2.php?vista=equi_update&dotacion_id_up='.$rows['equi_serial'].'" class="button is-success is-rounded is-small">Actualizar</a>
                    </td>
                    <td>
					<a href="'.$url.$pagina.'&equi_id_del='.$rows['equi_serial'].'" class="button is-danger is-rounded is-small">Eliminar</a>
                    </td>
                </tr>
            ';
		}
		$pag_final=$contador-1;
	}else{
		if($total>=1){
			$tabla.='
				<tr class="has-text-centered" >
					<td colspan="7">
						<a href="'.$url.'1" class="button is-link is-rounded is-small mt-4 mb-4">
							Haga clic acá para recargar el listado
						</a>
					</td>
				</tr>
			';
		}else{
			$tabla.='
				<tr class="has-text-centered" >
					<td colspan="7">
						No hay registros en el sistema
					</td>
				</tr>
			';
		}
	}


	$tabla.='</tbody></table></div>';

	if($total>0 && $pagina<=$Npaginas){
		$tabla.='<p class="has-text-right">Mostrando Equipos <strong>'.$pag_inicio.'</strong> al <strong>'.$pag_final.'</strong> de un <strong>total de '.$total.'</strong></p>';
	}

	$conexion=null;
	echo $tabla;

	if($total>=1 && $pagina<=$Npaginas){
		echo paginador_tablas($pagina,$Npaginas,$url,7);
	}