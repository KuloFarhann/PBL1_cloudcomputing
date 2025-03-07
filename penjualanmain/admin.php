<html>
<head>
	<meta charset="utf-8">
	<title>Selamat Datang</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<?php 
	session_start();
 	// Bagian untuk mengecek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php");
	}
	?>
<div id="header">
	<tr>Selamat Datang <b><?php echo $_SESSION['username']; ?>!</b></tr>
	<tr><div id="logout-container" align="right"><a id="logout-link" href="../logout.php">Logout</a></div></tr>
</div>
<div id="nav">
	<a href="transaksi/index.php">Form Transaksi</a>
	<a href="barang/input_barang.php">Form Barang</a>
	<a href="../barang/rekap.php">Rekapan</a>
	<a href="../barang/daftarlist.php">Daftar List</a>
</div> 
</body>
</html>

