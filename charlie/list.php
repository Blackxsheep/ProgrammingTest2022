<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Daftar Transaksi</title>
</head>

<body>
	<?php
	
	include '../charlie/koneksi.php';
	
	?>
	<link rel="stylesheet" type="text/css" href="style.css" />
<table border="1">
  <tbody> 
    <tr> 
      <th  colspan="9" scope="row" align="right">Cari <input type="search">
		<input type="submit" value="Cari"</th>
    </tr>
    <tr>
      <th scope="row">No</th>
      <td>No Transaksi</td>
      <td>Tanggal</td>
      <td>Nama Costumer</td>
      <td>Jumlah Barang</td>
      <td>Sub Total</td>
      <td>Diskon</td>
      <td>Ongkir</td>
      <td>Total</td>
    </tr>
  </tbody>
	<tbody>
			<?php 
			
			$barang = mysqli_query($koneksi,"SELECT t_sales.id, t_sales.kode, t_sales.tgl, m_costumer.nama, t_sales.qty, t_sales.subtotal, t_sales.diskon, t_sales.ongkir, t_sales.total_bayar
			FROM t_sales
			INNER JOIN m_costumer
			ON m_costumer.id=t_sales.cust_id
			ORDER BY t_sales.id;");
			while($b = mysqli_fetch_array($barang)){
			
			$total[]=$b['total_bayar'];
			$totalbayar = array_sum($total); 
							
			?>
		
				<tr>
					<td><?php echo $b['id']; ?></td>
					<td><?php echo "202101-".$b['kode']; ?></td>
					<td><?php echo $b['tgl']; ?></td>
					<td><?php echo $b['nama']; ?></td>
					<td><?php echo $b['qty']; ?></td>
					<td><?php echo number_format($b['subtotal'])." ,00"; ?></td>
					<td><?php echo number_format($b['diskon'])." ,00"; ?></td>
					<td><?php echo number_format($b['ongkir'])." ,00"; ?></td>
					<td><?php echo number_format($b['total_bayar'])." ,00"; ?></td>
				</tr>				
				<?php }?>
				<tr>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  <td colspan="4" align="center">Grand Total</td>
				  <td><?php echo number_format($totalbayar).",00" ?></td>
	  			</tr>
		</tbody>
	
</table>
</body>
</html>