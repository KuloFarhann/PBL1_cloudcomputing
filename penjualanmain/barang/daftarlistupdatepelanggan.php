<?php
include("../koneksi.php");
session_start();
?>
<html>
<head>
    <title>Daftar List</title>
</head>
<link rel="stylesheet" href="../style.css">
<body>
<div id="header">
	<tr>Selamat Datang <b><?php echo $_SESSION['username']; ?>!</b></tr>
	<tr><div id="logout-container" align="right"><a id="logout-link" href="../logout.php">Logout</a></div></tr>
</div>
<div id="nav">
    <a href="../transaksi/indexpelanggan.php">Form Transaksi</a>
    <a href="../barang/daftarlistpelanggan.php">Daftar List</a>
</div>
<?php require "../koneksi.php"; ?>
<div align="center">
    <h1>Update Daftar List Barang</h1>
    <form method="post" action="">
        <input type="text" name="search" placeholder="Cari berdasarkan nama barang">
        <input type="submit" value="Cari">
    </form>
    <table>
        <tr>
            <th bgcolor="#ffc0cb">No</th>
            <th bgcolor="#ffc0cb">Nama Barang</th>
            <th bgcolor="#ffc0cb">Kategori</th>
            <th bgcolor="#ffc0cb">Harga Barang</th>
        </tr>
        <?php
        $results_per_page = 10; // Jumlah hasil per halaman

        if (!isset($_GET['page'])) {
            $page = 1;
        } else {
            $page = $_GET['page'];
        }

        $start_from = ($page - 1) * $results_per_page;

        // Pencarian
        if(isset($_POST['search'])) {
            $search = $_POST['search'];
            $query = mysqli_query($conn, "SELECT * FROM barang WHERE nama_barang LIKE '%$search%' ORDER BY id_barang ASC LIMIT $start_from, $results_per_page");
        } else {
            $query = mysqli_query($conn, "SELECT * FROM barang ORDER BY id_barang ASC LIMIT $start_from, $results_per_page");
        }

        // Pagination
        $total_pages_query = "SELECT COUNT(*) as total FROM barang";
        $result = mysqli_query($conn, $total_pages_query);
        $row = mysqli_fetch_assoc($result);
        $total_pages = ceil($row["total"] / $results_per_page);

        if(mysqli_num_rows($query)){
            $id_barang = $start_from + 1;
            while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $id_barang ?></td>
                    <td><?php echo $data["nama_barang"];?></td>
                    <td><?php echo $data["kategori"];?></td>
                    <td><?php echo $data["harga_barang"];?></td>
                </tr>
                <?php $id_barang++; } ?>
        <?php } ?>
    </table>
    <?php
    // Pagination Links
    for ($i = 1; $i <= $total_pages; $i++) {
        echo "<a href='?page=" . $i . "'>" . $i . "</a> ";
    }
    ?>
</div>
<br>
<div align="center">
    <a href="../barang/daftarlist_pelanggan.php" > &lt;&lt; Kembali</a>
</div>
</body>
</html>
