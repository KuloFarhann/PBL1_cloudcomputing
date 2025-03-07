<?php
//include verifikasi.php pada file Administrasi
include("../koneksi.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Rekap Hasil Transaksi</title>
</head>
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
<div align="center">
    <h1>Rekap Hasil Transakasi</h1>
    <table>
        <tr>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Harga Barang</th>
            <th>Total Transaksi</th>
        </tr>
        <?php
        include("../koneksi.php");

        $sql = "SELECT barang.id_barang, barang.nama_barang, barang.kategori, barang.harga_barang, 
        COALESCE(SUM(transaksi.subtotal), 0) AS total 
        FROM barang 
        INNER JOIN transaksi ON barang.nama_barang = transaksi.nama_barang
        GROUP BY barang.id_barang, barang.nama_barang, barang.kategori, barang.harga_barang";
        $result = $conn->query($sql);
        /* right
        $sql = "SELECT barang.id_barang, barang.nama_barang, barang.harga_barang, 
        COALESCE(SUM(transaksi.subtotal), 0) AS total 
        FROM barang 
        RIGHT JOIN transaksi ON barang.nama_barang = transaksi.nama_barang
        GROUP BY barang.id_barang, barang.nama_barang, barang.harga_barang";
         $result = $conn->query($sql);
        */
        /* left
        $sql = "SELECT barang.id_barang, barang.nama_barang, barang.harga_barang, 
        COALESCE(SUM(transaksi.subtotal), 0) AS total 
        FROM barang 
        LEFT JOIN transaksi ON barang.nama_barang = transaksi.nama_barang
        GROUP BY barang.id_barang, barang.nama_barang, barang.harga_barang";
        $result = $conn->query($sql);
        */
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['id_barang']."</td>";
                echo "<td>".$row['nama_barang']."</td>";
                echo "<td>".$row['kategori']."</td>";
                echo "<td>".$row['harga_barang']."</td>";
                echo "<td>".$row['total']."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No data found</td></tr>";
        }
        ?>
    </table>
    <a href="../transaksi/index.php" > &lt;&lt; Back</a>
    </div>
</body>
</html>
