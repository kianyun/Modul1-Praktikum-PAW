<?php
// Data produk disimpen di array PHP
$produk = [
    [
        "nama" => "Monitor 24 Inch",
        "kategori" => "Monitor",
        "harga" => 1800000,
        "stok" => 4
    ],
    [
        "nama" => "Laptop Gaming",
        "kategori" => "Laptop",
        "harga" => 8500000,
        "stok" => 3
    ],
    [
        "nama" => "Mouse Wireless",
        "kategori" => "Aksesoris",
        "harga" => 150000,
        "stok" => 10
    ],
    [
        "nama" => "Keyboard Mechanical",
        "kategori" => "Aksesoris",
        "harga" => 450000,
        "stok" => 0
    ],
    [
        "nama" => "Headset Gaming",
        "kategori" => "Audio",
        "harga" => 1200000,
        "stok" => 2
    ],
    [
        "nama" => "Webcam 1080P",
        "kategori" => "Aksesoris",
        "harga" => 600000,
        "stok" => 5
    ]
];

// Ngitung total produk secara otomatis
$total_produk = count($produk);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cia Store</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
            color: #333;
        }

        /* Mengatur posisi logo agar sejajar dengan ikon */
        .logo {
            display: flex;
            align-items: center;
            gap: 8px; /* Jarak antara ikon dan teks */
        }

        /* Mengatur ukuran ikon logo */
        .logo-icon {
            width: 24px;
            height: 24px;
            border-radius: 40px;
        }
        
        /* 1. Black Bar di Paling Atas */
        .top-bar {
            background-color: #111111;
            color: #ffffff;
            text-align: center;
            padding: 8px 10px;
            font-size: 12px;
        }

        .top-bar p {
            margin: 0;
        }

        /* 2. Header / Navbar Utama */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #000000;
            padding: 15px 30px;
            border-bottom: 1px solid #ddd;
        }

        .logo h2 {
            margin: 0;
            color: #ffffff;
            font-size: 20px;
        }

        .nav-links {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 20px;
        }

        .nav-links li a {
            text-decoration: none;
            color: #ffffff;
            font-size: 14px;
            font-weight: bold;
        }

        .nav-links li a:hover {
            color: #007bff;
        }

        /* Container Isi Konten */
        .container {
            padding: 20px 30px;
        }

        /* Hero Section */
        .hero {
            background-color: #000000;
            padding: 25px;
            border-radius: 20px;
            margin-bottom: 30px;
            margin-top: 10px;
        }

        .hero h1 {
            margin-top: 0;
            color: #ffffff;
        }
        .hero p {
            color: #ffffff;
            margin-bottom: 0;
        }

        .total-info {
            font-weight: bold;
            font-size: 16px;
            margin-bottom: 15px;
        }

        /* Layout Grid Katalog */
        .katalog {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .card {
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 15px;
            width: calc(33.333% - 14px); /* Default 3 kolom di layar lebar */
            min-width: 220px;
        }

        .card h3 {
            margin-top: 0;
            font-size: 18px;
        }

        .diskon-badge {
            background-color: red;
            color: white;
            font-size: 11px;
            padding: 2px 6px;
            border-radius: 3px;
            font-weight: bold;
        }

        .harga-lama {
            text-decoration: line-through;
            color: #888;
            font-size: 13px;
        }

        .harga-baru {
            color: green;
            font-weight: bold;
            font-size: 16px;
        }

        .status-tersedia {
            color: green;
            font-weight: bold;
        }

        .status-habis {
            color: red;
            font-weight: bold;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
        }

        button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }

        .footer {
            margin-top: 40px;
            text-align: center;
            font-size: 13px;
            color: #666;
            border-top: 1px solid #ddd;
            padding: 15px 0;
            background-color: #ffffff;
        }

        /* ==========================================
           RESPONSIVE LAYOUT (Layar HP / Kurang dari 600px)
           ========================================== */
        @media (max-width: 600px) {
            .navbar {
                flex-direction: column;
                gap: 15px;
                padding: 15px;
            }

            .container {
                padding: 15px;
            }

            .hero {
                padding: 15px;
                border-radius: 12px;
                margin-bottom: 20px;
            }

            .card {
                width: 100%; /* Kartu memenuhi lebar layar HP */
            }
        }
    </style>
</head>
<body>

    <!-- Header / Navbar -->
    <header class="navbar">
        <div class="logo">
            <!-- Gambar Ikon Kecil -->
            <img src="images.png" alt="Logo Icon" class="logo-icon">
            <h2>Cia Store</h2>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href="#about">About</a></li>
            </ul>
        </nav>
    </header>

    <!-- Konten Utama -->
    <div class="container">
        
        <!-- Hero Section -->
        <div class="hero" id="home">
            <h1>Simple Tech Store</h1>
            <p>Temukan berbagai perangkat dan aksesoris teknologi untuk kebutuhanmu.</p>
        </div>

        <!-- Informasi Total Produk -->
        <div class="total-info">
            Total Produk: <?php echo $total_produk; ?>
        </div>

        <h2 id="products">Katalog Produk</h2>

        <!-- Loop Katalog Produk -->
        <div class="katalog">
            <?php foreach ($produk as $item): ?>
                <div class="card">
                    <h3><?php echo $item['nama']; ?></h3>
                    <p>Kategori: <?php echo $item['kategori']; ?></p>

                    <!-- Logika Hitung Diskon (Challenge) -->
                    <?php if ($item['harga'] >= 1000000): ?>
                        <?php 
                            $diskon = $item['harga'] * 0.1;
                            $harga_akhir = $item['harga'] - $diskon;
                        ?>
                        <span class="diskon-badge">DISKON 10%</span>
                        <p>
                            Harga: <span class="harga-lama">Rp <?php echo number_format($item['harga'], 0, ',', '.'); ?></span><br>
                            <span class="harga-baru">Rp <?php echo number_format($harga_akhir, 0, ',', '.'); ?></span>
                        </p>
                    <?php else: ?>
                        <p>Harga: <b>Rp <?php echo number_format($item['harga'], 0, ',', '.'); ?></b></p>
                    <?php endif; ?>

                    <p>Stok: <?php echo $item['stok']; ?></p>

                    <!-- Logika Status Stok -->
                    <?php if ($item['stok'] > 0): ?>
                        <p class="status-tersedia">Status: Tersedia</p>
                        <button type="button">Beli Sekarang</button>
                    <?php else: ?>
                        <p class="status-habis">Status: Stok Habis</p>
                        <button type="button" disabled>Beli Sekarang</button>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>

    </div>

    <!-- Footer -->
    <div class="footer" id="about">
        <p>&copy; 2026 Cia Store. Praktikum Pengembangan Aplikasi Website.</p>
    </div>

</body>
</html>