<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
		<table>
		<tr>
			<td><h3> Genre</h3>
				<?php
				$genre = $_POST['genre'];				
				foreach ($genre as $value ) {					
				?>
				<tr>
					<td><?php echo $value;?></td>
				</tr>
			<?php }?>
			</td>
			<td><a href="form.html">Hapus</a></td>
		</tr>
		<tr>
			<td><h3> Wisata</h3>
				<?php				
				$wisata = $_POST['wisata'];
				foreach ($wisata as $value ) {					
				?>
				<tr>
					<td><?php echo $value;?></td>
				</tr>
			<?php }?>
			</td>
			<td><a href="form.html">Hapus</a></td>
		</tr>
		<tr>
			<td><br><br><a href="login.html">Logout	</a></td>
		</tr>
	</table>
</body>
</html>