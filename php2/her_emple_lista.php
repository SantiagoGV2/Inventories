<?php
	$inicio = ($pagina>0) ? (($pagina * $registros)-$registros) : 0;
	$tabla="";

	if(isset($busqueda) && $busqueda!=""){

		$consulta_datos="SELECT * FROM emple_herramientas WHERE ((emple_her_id AND emple_her_id LIKE '%$busqueda%' OR emple_cedula LIKE '%$busqueda%' OR her_cod LIKE '%$busqueda%')) ORDER BY emple_her_id ASC LIMIT $inicio,$registros";

		$consulta_total="SELECT COUNT(emple_her_id) FROM emple_herramientas WHERE emple_her_id AND ((emple_her_id LIKE '%$busqueda%' OR emple_cedula LIKE '%$busqueda%' OR her_cod LIKE '%$busqueda%'))";

	}else{

		$consulta_datos="SELECT * FROM emple_herramientas WHERE emple_her_id ORDER BY emple_her_id ASC LIMIT $inicio,$registros";

		$consulta_total="SELECT COUNT(emple_her_id) FROM emple_herramientas WHERE emple_her_id";
		
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
                	<th>#ID</th>
                    <th>Cedula</th>
                    <th>Herramienta</th>
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
					<td>'.$contador.'</td>
                    <td>'.$rows['emple_cedula'].'</td>
                    <td>'.$rows['her_cod'].'</td>
                    <td>
                        <a href="index2.php?vista=her_emple_update&emple_her_id_up='.$rows['emple_her_id'].'" class="button is-success is-rounded is-small">Actualizar</a>
                    </td>
                    <td>
                        <a href="'.$url.$pagina.'&her_id_del='.$rows['emple_her_id'].'" class="button is-danger is-rounded is-small">Eliminar</a>
                    </td>
                </tr>
            ';
            $contador++;
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
		$tabla.='<p class="has-text-right">Mostrando usuarios <strong>'.$pag_inicio.'</strong> al <strong>'.$pag_final.'</strong> de un <strong>total de '.$total.'</strong></p>';
	}

	$conexion=null;
	echo $tabla;

	if($total>=1 && $pagina<=$Npaginas){
		echo paginador_tablas($pagina,$Npaginas,$url,7);
	}