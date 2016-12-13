<?php 
	class VistaPersonas{
			
			public function mostrarLista($d){				
				if($d->num_rows>0){
					echo "<table>";
					while($fila=$d->fetch_assoc()){
						echo'<tr><td>'.$fila['paterno'].'</td></tr>';
						echo'<tr><td>'.$fila['materno'].'</td></tr>';
						echo'<tr><td>'.$fila['nombres'].'</td></tr>';
					}

					echo'</table>';

				}else{

					echo "<h3>No hay resultados</h3>";

				}
			}
		}
 ?>