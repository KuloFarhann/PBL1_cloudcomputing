<html>
<head>
	<meta charset="utf-8">
	<title>Selamat Datang</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
<div id="header">
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php");
	}
	?>
	<tr>Selamat Datang <b><?php echo $_SESSION['username']; ?>!</b></tr>
	<tr><div id="logout-container" align="right"><a id="logout-link" href="../logout.php">Logout</a></div></tr>
</div>
<div id="nav">
	<a href="transaksi/indexpegawai.php">Form Transaksi</a>
	<a href="barang/input_barangpegawai.php">Form Barang</a>
	<a href="barang/daftarlist_pegawai.php">Daftar List</a>
</div> 
</body>
</html>

