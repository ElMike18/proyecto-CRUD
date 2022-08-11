<?php
//$con=mysql_connect('localhost','root','Miproyecto');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Datos almacenados</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

<br>

	<table border="4">
			<tr>
				<td> id </td>
				<td> fullname </td>
				<td> username </td>
				<td> email </td>
				<td> password </td>
				<td> created_at </td>
			</tr>
			<?php
			$sql="SELECT * from usuario";
			$result=mysql_query($con,$sql);
			while($mostrar=mysql_fetch_array($result)){
			?>

			<tr>
				<td><?php echo $mostrar['id'] ?></td>
				<td><?php echo $mostrar['fullname'] ?></td>
				<td><?php echo $mostrar['usarname'] ?></td>
				<td><?php echo $mostrar['email'] ?></td>
				<td><?php echo $mostrar['password'] ?></td>
				<td><?php echo $mostrar['created_at'] ?></td>
			</tr>
			<?php
			}
		?>
		</table>
</body>
</html>