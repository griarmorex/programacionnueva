<!DOCTYPE html>
<html lang="es">	
	<head>
		<title>11-08-2016</title>
	</head>
	<body>
		<?php echo sqrt(49); ?>
		<table>
			<tr>
				<td>Rojo</td><td style="background:#f00; width:50px;"></td>
			</tr>
			<tr>
				<td><?php echo "verde"; ?></td>
				<td style="background:<?php echo "green"; ?>; width:50px;"></td>
			</tr>
			<?php
				echo "<tr>\n";
				echo "<td>Azul</td>";
				echo "<td style=\"background:blue; width:50px;\"></td>";
				echo "</tr>";
			?>
		</table>
	</body>
</html>