<?php
//include verifikasi.php pada file Administrasi
include("../koneksi.php");
session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title>Form Transaksi</title>
<link rel="stylesheet" href="../style.css" />
</head>
<body>
<div id="header">
	<tr>Selamat Datang <b><?php echo $_SESSION['username']; ?>!</b></tr>
	<tr><div id="logout-container" align="right"><a id="logout-link" href="../logout.php">Logout</a></div></tr>
</div>
<div id="nav">
	<a href="transaksi/input.php">Form Transaksi</a>
	<a href="barang/input_barang.php">Form Barang</a>
	<a href="../barang/rekap.php">Rekapan</a>
</div>   
<?php 
$id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM transaksi WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
// mengalihkan ke halaman index.php
header("location:view.php");
?>
<br>
</body>  
</html>  
