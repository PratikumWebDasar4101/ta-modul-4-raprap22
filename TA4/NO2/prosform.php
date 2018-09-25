<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
		<table>
		<tr>
			<td><h3> Nama Pembeli</h3>
				<?php
				session_start();
				$_SESSION['id'] = isset($_POST['id'])?$_POST["id"]: $_SESSION["id"];
				foreach ((array)$_SESSION['id'] as $value ) {					
				?>
				<tr>
					<td><?php echo "$value";?></td>
				</tr>
			<?php }?>
				
			</td>
		</tr>
		<tr>
			<td><h3> Keranjang</h3>
				<?php
				$keranjang = $_POST['keranjang'];				
				foreach ($keranjang as $value ) {					
				?>
				<tr>
					<td><?php echo "$value";?></td>
				</tr>
			<?php }?>
			</td>
			<td><a href="form.html">Hapus</a></td>
		</tr>
		<tr>
			<td><h3> Jenis Pengiriman</h3>
				<?php				
				$jenpeng = $_POST['jenpeng'];
				foreach ((array)$jenpeng as $value ) {					
				?>
				<tr>
					<td><?php echo "$value";?></td>
				</tr>
			<?php }?>
			</td>
		</tr>
		<tr>
			<td><?php $alamat = $_POST["alamat"]; 
				echo "<h3>Alamat</h3> $alamat";
				?></td>
		</tr>
		<tr>
			<td>
				<?php 
					$tgl=date('d-m-Y');
					echo "<h3>Tanggal Pembelian</h3> $tgl";
				 ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php  
				// session_start();
				$hargajenpeng;
				// $jenpeng = $_POST["jenpeng"];
				// $keranjang = $_POST["keranjang"];
					echo "<br><h3>Isi Keranjang</h3>";
					foreach ($keranjang as $value ) {
						echo "<br>- $value";
					}

					$total = 0;

					if ($jenpeng=="TIKI") {
						$hargajenpeng = 8000;
					}elseif ($jenpeng=="JNE") {
						$hargajenpeng = 12000;
					}elseif ($jenpeng=="JNT"){
						$hargajenpeng = 15000;
					}

					for ($i = 0; $i < count($keranjang); $i++) { 
						if ($keranjang[$i] == "Kemeja") {
							$harga = 200000;
						} elseif($keranjang[$i] == "Kaos Kaki"){
							$harga = 30000;
						} elseif($keranjang[$i] == "Jam Tangan"){
							$harga = 50000;
						} elseif($keranjang[$i] == "Celana Chino"){
							$harga = 250000;
						}elseif($keranjang[$i] == "Celana jeans"){
							$harga = 250000;
						}else{
							$harga = 50000;
						}
						$total = $total + $harga;
					}
					error_reporting(0);
					echo "<br><br>Biaya Pengiriman $jenpeng : Rp. ".number_format($hargajenpeng)."<br>";
					$total = $total + $hargajenpeng;
					$line = count($_SESSION['listbarang']);
					$_SESSION['listbarang'][$line] = array(
						"keranjang" => $keranjang, "jenpeng" => $jenpeng, "alamat" => $alamat, "total" => $total
					);
					$listbarng = $_SESSION['listbarang'];
					echo "<br>Total biaya yang dibayar = Rp." . number_format($listbarng[0].$total);
				?>
			</td>
		</tr>
		<tr>
			<td><h4><a href="login.html">Logout	</a></h4></td>
		</tr>
	</table>
</body>
</html>