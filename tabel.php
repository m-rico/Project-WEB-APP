<!DOCTYPE html>
<html>
<head>
	<title> Laundry Cahaya </title>
</head>
<body>

	<center>

		<h2> Laporan Data Transaksi Pada Laundry Cahaya </h2>


		<?php 
		include 'koneksi.php';
		?>

		<table border="1">
			<tr>
				<th>No</th>
                <th>ID_Pembayaran</th>
                <th>ID_Customer</th>
                <th>ID_Karyawan</th>
                <th>ID_Owner</th>
                <th>ID_Layanan</th>
                <th>ID_Kiloan</th>
                <th>ID_Barang</th>
                <th>Total_Harga</th>
			</tr>
			<?php 
			$no = 1;
			$sql = mysqli_query($koneksi,"select * from pembayaran");
			while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
                <td><?php echo $data['ID_Pembayaran']; ?></td>
                <td><?php echo $data['ID_Customer']; ?></td>
                <td><?php echo $data['ID_Karyawan']; ?></td>
                <td><?php echo $data['ID_Owner']; ?></td>
                <td><?php echo $data['ID_Layanan']; ?></td>
                <td><?php echo $data['ID_Kiloan']; ?></td>
                <td><?php echo $data['ID_Barang']; ?></td>
                <td><?php echo $data['Total_Harga']; ?></td>
			</tr>
			<?php 
			}
			?>
		</table>

		<br/>

		 <a href="cetak.php" target="_blank">CETAK</a>  


	</center>
</body>
</html>