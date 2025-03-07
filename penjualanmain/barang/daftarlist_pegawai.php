<?php
include("../koneksi.php");
session_start();
?>
<html>
<head>
    <title>Daftar List</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

header {
    background-color: #333;
    color: #fff;
    padding: 1em;
    text-align: center;
}

nav ul {
    list-style-type: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin: 0 1em;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
}

main {
    padding: 2em;
}

section {
    margin-bottom: 2em;
}

button {
    padding: 0.5em 1em;
    background-color: #333;
    color: #fff;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #555;
}

.grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 1em;
}

.grid-item {
    background-color: #f9f9f9;
    padding: 1em;
    border: 1px solid #ddd;
    border-radius: 8px;
}

.item-list {
    display: none;
    margin-top: 1em;
}

.item-list.show {
    display: block;
}

.item-list h3 {
    color: #333;
}

.item-list ul {
    list-style-type: none;
    padding: 0;
}

.item-list ul li {
    padding: 0.5em 0;
}

#search {
    text-align: center;
    margin-bottom: 2em;
}

#search input {
    padding: 0.5em;
    width: 80%;
    max-width: 300px;
    margin-right: 1em;
}

#search button {
    padding: 0.5em 1em;
}

#results {
    margin-top: 2em;
}

#search-results ul {
    list-style-type: none;
    padding: 0;
}

#search-results ul li {
    padding: 0.5em;
    border-bottom: 1px solid #ccc;
}
img {
    max-width: 100%;
    height: auto;
    border-radius: 5px;
}

</style>
<link rel="stylesheet" href="../style.css">
<body>
<div id="header">
	<tr>Selamat Datang <b><?php echo $_SESSION['username']; ?>!</b></tr>
	<tr><div id="logout-container" align="right"><a id="logout-link" href="../logout.php">Logout</a></div></tr>
</div>
<div id="nav">
    <a href="../transaksi/indexpegawai.php">Form Transaksi</a>
    <a href="../barang/input_barangpegawai.php">Form Barang</a>
    <a href="../barang/daftarlist_pegawai.php">Daftar List</a>
</div>
<?php require "../koneksi.php"; ?>
<body>
    <div align="center">
    <h1>Daftar List</h1>
    </div>
    <main>
        <section id="search">
            <input type="text" id="search-input" placeholder="Search for parts...">
            <button onclick="searchItems()">Search</button>
            <a input type="submit" href="../barang/daftarlistupdate.php">Show All Update List</a>
        </section>

        <section id="results">
            <h2>Search Results</h2>
            <div id="search-results"></div>
        </section>

        <section id="categories" class="grid-container">
            <div class="grid-item">
                <h2>Motherboards</h2>
                <button onclick="toggleList('list-motherboards')">Show List</button>
                <div id="list-motherboards" class="item-list">
                    <h3>ASUS</h3>
                    <ul>
                        <li>ASUS ROG Strix Z490-E</li>
                        <li>ASUS TUF Gaming B550M-PLUS</li>
                    </ul>
                    <h3>MSI</h3>
                    <ul>
                        <li>MSI MPG Z490 Gaming Edge</li>
                        <li>MSI B450 TOMAHAWK MAX</li>
                    </ul>
                </div>
            </div>

            <div class="grid-item">
                <h2>WiFi Adapters</h2>
                <button onclick="toggleList('list-wifi')">Show List</button>
                <div id="list-wifi" class="item-list">
                    <h3>TP-Link</h3>
                    <ul>
                        <li>TP-Link Archer T6E</li>
                        <li>TP-Link Archer T4U</li>
                    </ul>
                    <h3>ASUS</h3>
                    <ul>
                        <li>ASUS PCE-AC88</li>
                        <li>ASUS USB-AC68</li>
                    </ul>
                </div>
            </div>

            <div class="grid-item">
                <h2>RAM</h2>
                <button onclick="toggleList('list-ram')">Show List</button>
                <div id="list-ram" class="item-list">
                    <h3>Corsair</h3>
                    <ul>
                        <li>Corsair Vengeance LPX 16GB</li>
                        <li>Corsair Dominator Platinum 32GB</li>
                    </ul>
                    <h3>G.Skill</h3>
                    <ul>
                        <li>G.Skill Trident Z RGB 16GB</li>
                        <li>G.Skill Ripjaws V 32GB</li>
                    </ul>
                </div>
            </div>

            <div class="grid-item">
                <h2>Storage</h2>
                <button onclick="toggleList('list-storage')">Show List</button>
                <div id="list-storage" class="item-list">
                    <h3>SSD</h3>
                    <ul>
                        <li>Samsung 970 EVO Plus 1TB</li>
                        <li>WD Black SN750 1TB</li>
                    </ul>
                    <h3>HDD</h3>
                    <ul>
                        <li>Seagate Barracuda 2TB</li>
                        <li>Western Digital Blue 1TB</li>
                    </ul>
                </div>
            </div>

            <div class="grid-item">
                <h2>PSU</h2>
                <button onclick="toggleList('list-psu')">Show List</button>
                <div id="list-psu" class="item-list">
                    <h3>EVGA</h3>
                    <ul>
                        <li>EVGA SuperNOVA 750 G5</li>
                        <li>EVGA 600 W1</li>
                    </ul>
                    <h3>Corsair</h3>
                    <ul>
                        <li>Corsair RM850x</li>
                        <li>Corsair CX550M</li>
                    </ul>
                </div>
            </div>

            <div class="grid-item">
                <h2>Coolers</h2>
                <button onclick="toggleList('list-coolers')">Show List</button>
                <div id="list-coolers" class="item-list">
                    <h3>Noctua</h3>
                    <ul>
                        <li>Noctua NH-D15</li>
                        <li>Noctua NH-U12S</li>
                    </ul>
                    <h3>Cooler Master</h3>
                    <ul>
                        <li>Cooler Master Hyper 212 EVO</li>
                        <li>Cooler Master MasterLiquid ML240L</li>
                    </ul>
                </div>
            </div>

            <div class="grid-item">
                <h2>Graphics Cards</h2>
                <button onclick="toggleList('list-graphics-cards')">Show List</button>
                <div id="list-graphics-cards" class="item-list">
                    <h3>NVIDIA</h3>
                    <ul>
                        <li>NVIDIA GeForce RTX 3090</li>
                        <li>NVIDIA GeForce RTX 3080</li>
                    </ul>
                    <h3>AMD Radeon</h3>
                    <ul>
                        <li>AMD Radeon RX 6900 XT</li>
                        <li>AMD Radeon RX 6800 XT</li>
                    </ul>
                </div>
            </div>

            <div class="grid-item">
                <h2>Processors</h2>
                <button onclick="toggleList('list-processors')">Show List</button>
                <div id="list-processors" class="item-list">
                    <h3>Intel</h3>
                    <ul>
                        <li>Intel Core i9</li>
                        <li>Intel Core i7</li>
                        <li>Intel Core i5</li>
                    </ul>
                    <h3>AMD</h3>
                    <ul>
                        <li>AMD Ryzen 9</li>
                        <li>AMD Ryzen 7</li>
                        <li>AMD Ryzen 5</li>
                    </ul>
                </div>
            </div>

            <div class="grid-item">
                <h2>Monitors</h2>
                <button onclick="toggleList('list-monitors')">Show List</button>
                <div id="list-monitors" class="item-list">
                    <h3>LG</h3>
                    <ul>
                        <li>LG UltraGear 27GN950</li>
                        <li>LG 27GL850</li>
                    </ul>
                    <h3>Dell</h3>
                    <ul>
                        <li>Dell Ultrasharp U2719D</li>
                        <li>Dell S2721DGF</li>
                    </ul>
                </div>
            </div>

            <div class="grid-item">
                <h2>Cases</h2>
                <button onclick="toggleList('list-cases')">Show List</button>
                <div id="list-cases" class="item-list">
                    <h3>NZXT</h3>
                    <ul>
                        <li>NZXT H510</li>
                        <li>NZXT H710i</li>
                    </ul>
                    <h3>Fractal Design</h3>
                    <ul>
                        <li>Fractal Design Meshify C</li>
                        <li>Fractal Design Define R6</li>
                    </ul>
                </div>
            </div>
            
            <div class="grid-item">
                <h2>Mouse</h2>
                <button onclick="toggleList('list-mouse')">Show List</button>
                <div id="list-mouse" class="item-list">
                    <h3>Logitech</h3>
                    <ul>
                        <li>Logitech G502 Hero</li>
                        <li>Logitech MX Master 3</li>
                    </ul>
                    <h3>Razer</h3>
                    <ul>
                        <li>Razer DeathAdder Elite</li>
                        <li>Razer Basilisk Ultimate</li>
                    </ul>
                </div>
            </div>

            <div class="grid-item">
                <h2>Keyboard</h2>
                <button onclick="toggleList('list-keyboard')">Show List</button>
                <div id="list-keyboard" class="item-list">
                    <h3>Corsair</h3>
                    <ul>
                        <li>Corsair K95 RGB Platinum</li>
                        <li>Corsair K70 RGB MK.2</li>
                    </ul>
                    <h3>Razer</h3>
                    <ul>
                        <li>Razer BlackWidow Elite</li>
                        <li>Razer Huntsman Elite</li>
                    </ul>
                </div>
            </div>
            </section>

    <script>
        function toggleList(listId) {
            const list = document.getElementById(listId);
            list.classList.toggle('show');
        }

        function searchItems() {
            const query = document.getElementById('search-input').value.toLowerCase();
            const items = document.querySelectorAll('.item-list ul li');
            const resultsContainer = document.getElementById('search-results');

            resultsContainer.innerHTML = ''; // Clear previous results

            if (query === '') {
                resultsContainer.innerHTML = '';
                return;
            }

            const resultsList = document.createElement('ul');

            items.forEach(item => {
                if (item.textContent.toLowerCase().includes(query)) {
                    const listItem = document.createElement('li');
                    listItem.textContent = item.textContent;
                    resultsList.appendChild(listItem);
                }
            });

            resultsContainer.appendChild(resultsList);
        }
    </script>
</body>
</html>