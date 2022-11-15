<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Form Input</title>
<link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.datepicker.min.css" rel="stylesheet" type="text/css">
<script src="jQueryAssets/jquery-1.11.1.min.js"></script>
<script src="jQueryAssets/jquery.ui-1.10.4.datepicker.min.js"></script>
</head>

<body>
	<?php
	
	include '../charlie/koneksi.php';
	
	?>
	<link rel="stylesheet" type="text/css" href="style.css" />
<table>
  <tbody>
	<tr>
    <th scope="row" >Transaksi &nbsp;</th>
    <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row" align="left">No&nbsp;&nbsp;</th>
      <td><input type="text">&nbsp;</td>
    </tr>
    <tr>
      <th scope="row" align="left">Tanggal&nbsp;</th>
      <td><input type="text" id="Datepicker1"></td>
    </tr>
  </tbody>
</table>
<script type="text/javascript">
$(function() {
	$( "#Datepicker1" ).datepicker(); 
});
</script>
	
	<br>
	
	<table>
  		<tbody>
	<tr>
    	<th scope="row" >Costumer &nbsp;</th>
    	<td>&nbsp;</td>
    </tr>
    <tr>
     	<th scope="row" align="left">Kode &nbsp;</th>
    	<td><input type="text">&nbsp;</td>
    </tr>
    <tr>
    	<th scope="row" align="left">Nama &nbsp;</th>
    	<td><input type="text">&nbsp;</td>
    </tr>
	<tr>
     	<th scope="row" align="left">Telp &nbsp;</th>
    	<td><input type="text">&nbsp;</td>
    </tr>
  		</tbody>
	</table>
	
	<br>
	<br>
	<table border="1">
  <tbody>
    <tr>
      <th scope="row" colspan="2" rowspan="2">Tambah</th>
      <td rowspan="2">No</td>
      <td rowspan="2">Kode Barang</td>
      <td rowspan="2">Nama Barang</td>
      <td rowspan="2">Qty</td>
      <td rowspan="2">Harga Banderol</td>
      <td colspan="2">Diskon</td>
      <td rowspan="2">Harga Diskon</td>
      <td rowspan="2">Total</td>
    </tr>
    <tr>
      <th scope="row">%</th>
      <td>Rp</td>
    </tr>
  </tbody>
		<tbody>
			<?php 
			$detail = mysqli_query($koneksi,"SELECT t_sales_det.id , m_barang.kode, m_barang.nama, t_sales_det.qty, t_sales_det.harga_bandrol, t_sales_det.diskon_pct, t_sales_det.diskon_nilai, t_sales_det.harga_diskon, t_sales_det.total FROM t_sales_det INNER JOIN m_barang ON t_sales_det.barang_id= m_barang.id ORDER BY t_sales_det.id;");
			while($d = mysqli_fetch_array($detail)){
			
			?>
		
				<tr>
					<td>
					<a href = "# ? no_mhs= <?php echo $data['#']; ?>" >Ubah </a>
					</td>
					<td>
					<a href = "# ? no_mhs=<?php echo $data['#']; ?> ">Hapus </a></td>
					<td><?php echo $d['id']; ?></td>
					<td><?php echo $d['kode']; ?></td>
					<td><?php echo $d['nama']; ?></td>
					<td><input type="text" name="qty" required ></td>
					<td><?php echo $d['harga_bandrol']." ,00"; ?></td>
					<td><input type="text" name="diskon_pct" required ></td>
					<td><input type="text" name="diskon_nilai" required ></td>
					<td><?php echo number_format($d['harga_diskon'])." ,00"; ?></td>
					<td><?php echo number_format($d['total'])." ,00"; ?></td>
				</tr>				
				<?php }?>
				<tr>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				  <td colspan="6" align="center">Grand Total</td>
				  <td> </td>
	  			</tr>
		</tbody>
</table>

</body>
</html>
