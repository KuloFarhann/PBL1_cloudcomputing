<?php
//include verifikasi.php pada file Administrasi
include("../koneksi.php");
session_start();
?>
<html>
 <head>  
		<link rel="stylesheet" href="../style.css" />  
 </head>
<style>
    body {
        font-family: Arial, sans-serif;
        font-style: oblique;
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
	<a href="../transaksi/index.php">Form Transaksi</a>
	<a href="../barang/input_barang.php">Form Barang</a>
    <a href="../barang/rekap.php">Rekapan</a>
    <a href="../barang/daftarlist.php">Daftar List</a>
</div>
<div class="container">
    <h2>Form Barang</h2>
    <form method="post" action="Proses_barang.php">  
        <table class="form-table">  
            <tr>  
                <th colspan="2">Form Barang</th>  
            </tr>
            <tr>  
                <td><strong>Nama Barang</strong></td>  
                <td><input name="nama_barang" type="text" size="20"/></td>  
            </tr>
            <tr>
	            <td bgcolor="#ffc0cb"><strong>Kategori</strong></td>
                <td bgcolor="#ffc0cb">&nbsp;
                <select name="kategori">
                <option value="motherboard">Motherboard
                <option value="wifi">Router Wifi
                <option value="ram">Ram
                <option value="storage">Penyimpanan
                <option value="psu">PSU
                <option value="cooler">Cooler
                <option value="vga">Graphic Card
                <option value="prosesor">Processor
                <option value="monitor">Monitor
                <option value="case">Casing
                </select>
                </td>
            </tr>  
            <tr>  
                <td><strong>Harga Barang</strong></td>  
                <td><input name="harga_barang" type="text" size="10"/></td>  
            </tr>
            <tr>  
                <td>&nbsp;</td>  
                <td><input name="" type="submit" value="Input" />&nbsp;
                <input name="" type="reset" value="Hapus" /></td>  
            </tr>  
        </table>  
    </form>
    <a href="view_barang.php">Edit Tabel Barang</a>
</div>  
</body>  
</html>