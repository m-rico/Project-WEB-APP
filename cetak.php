<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
</head>
<body>
 
	<center>
 
		<h2>DATA LAPORAN BARANG</h2>
		<h4>WWW.Dligent.COM</h4>
 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
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
 
	<script>
		window.print();
	</script>
 
</body>
</html>