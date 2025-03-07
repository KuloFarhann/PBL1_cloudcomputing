<?php
//include verifikasi.php pada file Administrasi
include("../koneksi.php");
session_start();
?>
<?php
require "../koneksi.php";
$id_barang = $_GET['id_barang'];
$query = mysqli_query($conn,"select * from barang where id_barang='$id_barang'");
while($data = mysqli_fetch_array($query)){
?>

<html>
<head>  
	<title>Form Edit Transaksi</title>
	<link rel="stylesheet" href="../style.css">  
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 400px;
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
        background-color: #f1f1f1;
        border-radius: 5px;
        overflow: hidden;
    }
    .form-table th {
        background-color: #cd5c5c;
        color: #fff;
        padding: 10px;
        text-align: center;
    }
    .form-table td {
        padding: 10px;
        text-align: left;
    }
    .form-table input[type="text"],
    .form-table input[type="submit"],
    .form-table input[type="reset"] {
        width: calc(100% - 20px);
        padding: 8px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
        margin: 5px 0;
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
</style>    
<body>
<div id="header">
	<tr>Selamat Datang <b><?php echo $_SESSION['username']; ?>!</b></tr>
	<tr><div id="logout-container" align="right"><a id="logout-link" href="../logout.php">Logout</a></div></tr>
</div>
<div id="nav">
	<a href="index.php">Form Transaksi</a>
	<a href="../barang/input_barang.php">Form Barang</a>
    <a href="../barang/rekap.php">Rekapan</a>
</div>  
<div class="container">  
    <h2>Form Edit Transaksi</h2>  
    <form id="form1" name="form1" method="get" action="editsimpan_barang.php">  
        <table class="form-table">  
            <tr>  
                <th colspan="2">Form Edit Transaksi</th>  
            </tr>
            <tr>  
                <td><strong>Id</strong></td>  
                <td><input name="id_barang" type="text" color="black" value="<?php echo $data['id_barang']; ?>"/></td>  
            </tr> 
            <tr>  
                <td><strong>Nama Barang</strong></td>  
                <td><input name="nama_barang" type="text" value="<?php echo $data['nama_barang']; ?>"/></td>  
            </tr>  
            <tr>  
                <td>Harga</td>  
                <td><input name="harga_barang" type="text" value="<?php echo $data['harga_barang']; ?>"/></td>  
            </tr>  
            <tr>  
                <td>&nbsp;</td>  
                <td><input name="" type="submit" value="Update" />&nbsp;  
                <input name="" type="reset" value="Hapus" /></td>  
            </tr>  
        </table>  
    </form>  
    <?php } ?>  
</div>
<div align="center">
    <a href="view_barang.php">Cek Transaksi</a>
</div>

</body>  
</html>  



