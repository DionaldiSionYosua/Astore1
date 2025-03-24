<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AStore</title>
    <link rel="stylesheet" href="menu.css">
</head>
<body>
    <header class="sticky">
        <div class="logo">
            <img src="ASTORE.PNG" alt="AStore Logo">
            <h1>AStore</h1>
        </div>
        <ul class="navmenu">
            <li><a href="#"><b>Menu Utama</b></a></li>
            <li><a href="#">Tentang Kami</a></li>
        </ul>
        <div class="search-bar">
            <form>
                <input type="text" name="search" placeholder="SEARCH">
            </form>
        </div>
        <div class="nav-icon">
            <a href="#"><i class='bx bx-cart'></i></a>
            <a href="#"><i class='bx bx-user'></i> Guest</a>
        </div>
    </header>

    <section class="daftar-produk" id="produk">
        <div class="center-text">
            <h2>Daftar Produk</h2>
        </div>
        <div class="product-grid">
            <div class="product-card">
                <img src="uploads/sample1.jpg" alt="Produk 1">
                <h4>Produk 1</h4>
                <p>Rp. 100.000</p>
                <a href="#">
                    <button class="normal">Detail</button>
                </a>
            </div>
            <div class="product-card">
                <img src="uploads/sample2.jpg" alt="Produk 2">
                <h4>Produk 2</h4>
                <p>Rp. 150.000</p>
                <a href="#">
                    <button class="normal">Detail</button>
                </a>
            </div>
            <div class="product-card">
                <img src="uploads/sample3.jpg" alt="Produk 3">
                <h4>Produk 3</h4>
                <p>Rp. 200.000</p>
                <a href="#">
                    <button class="normal">Detail</button>
                </a>
            </div>
        </div>
    </section>
</body>
