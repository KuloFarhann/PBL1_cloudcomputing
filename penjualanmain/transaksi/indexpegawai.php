<?php
//include verifikasi.php pada file Administrasi
include("../koneksi.php");
session_start();
?>
<html>
<head>
	<title>Form Transaksi</title>
	<link rel="stylesheet" href="../style.css"/>
</head>
<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f5f5f5;
			margin: 0;
			padding: 0;
		}
		.container {
			max-width: 800px;
			margin: 50px auto;
			background-color: #fff;
			border-radius: 10px;
			padding: 20px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}
		.container h2 {
			text-align: center;
			color: #333;
		}
		.form-table {
			width: 100%;
			border-collapse: collapse;
			margin-bottom: 20px;
		}
		.form-table th {
			background-color: #cd5c5c;
			color: #fff;
			padding: 10px;
			text-align: center;
		}
		.form-table td {
			background-color: #ffc0cb;
			padding: 10px;
		}
		.form-table input[type="text"],
		.form-table input[type="radio"],
		.form-table select,
		.form-table input[type="submit"],
		.form-table input[type="reset"] {
			width: calc(100% - 20px);
			padding: 8px;
			border-radius: 5px;
			border: 1px solid #ccc;
			box-sizing: border-box;
			margin: 5px 0;
			background-color: #f1f1f1;
			color: #333;
		}
		.form-table input[type="submit"],
		.form-table input[type="reset"] {
			background-color: #007bff;
			color: #fff;
			cursor: pointer;
		}
		.form-table input[type="submit"]:hover,
		.form-table input[type="reset"]:hover {
			background-color: #0056b3;
		}
		.form-table select {
			width: calc(100% - 26px);
		}
</style>
<body>
<div id="header">
	<tr>Selamat Datang <b><?php echo $_SESSION['username']; ?>!</b></tr>
	<tr><div id="logout-container" align="right"><a id="logout-link" href="../logout.php">Logout</a></div></tr>
</div>
<div id="nav">
	
	<a href="indexpegawai.php">Form Transaksi</a>
	<a href="../barang/input_barangpegawai.php">Form Barang</a>
    <a href="../barang/daftarlist_pegawai.php">Daftar List</a>
</div>
	<div class="container">
		<h2>Form Transaksi Penjualan</h2>
		<form method="post" action="prosespegawai.php">  
			<table class="form-table">  
				<tr>  
					<th colspan="2">Form Transaksi Penjualan</th>  
				</tr>
				<tr>  
					<td><strong>Nama Barang</strong></td>  
					<td><input name="nama_barang" type="text" /></td>  
				</tr>  
				<tr>  
					<td><strong>Harga</strong></td>  
					<td><input name="harga" type="text" size="10"/></td>  
				</tr>
				<tr>  
					<td><strong>Jumlah (Quantity)</strong></td>  
					<td><input name="jumlah" type="text" size="4"/></td>  
				</tr>  
				<tr>  
					<td><strong>Status</strong></td>  
					<td>
                        <label><input type="radio" name="status" value="Member" checked="checked"/>Member</label>  
                        <label><input type="radio" name="status" value="Bukan Member" id="status_1"/>Bukan Member</label>
					</td>  
				</tr>  
				<tr>
					<td><strong>Kota Pengiriman</strong></td>
					<td>
						<select name="kota">
							<option value="Jakarta">Jakarta</option>
							<option value="Bandung">Bandung</option>
							<option value="Surabaya">Surabaya</option>
							<option value="Medan">Medan</option>
							<option value="Semarang">Semarang</option>
							<option value="Makassar">Makassar</option>
							<option value="Palembang">Palembang</option>
							<option value="Purwokerto">Purwokerto</option>
						</select>
					</td>
				</tr>
				<tr>  
					<td>&nbsp;</td>  
					<td><input name="" type="submit" value="Proses" />&nbsp;
					<input name="" type="reset" value="Hapus" /></td>  
				</tr>  
			</table>  
		</form>  
	</div>
	<div align="center">
		<a href="view.php" >Cek Transaksi</a>
	</div>  
</body> 
</html>