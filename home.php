<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css?v=<?= filemtime('style.css') ?>">
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di Sistem Pencatatan Barang</h1>
        <p>Hai! Selamat datang di Sistem Pencatatan Barang. Sistem ini dirancang untuk mempermudah Anda dalam mengelola data barang dan pelanggan dengan cara yang lebih efisien dan terstruktur.</p>
        <p>Dengan sistem ini, Anda bisa dengan mudah menambah, atau menghapus data barang dan pelanggan sesuai kebutuhan Anda. Semua informasi yang Anda masukkan akan tersimpan dengan aman dan dapat diakses kapan saja.</p>

        <!-- Navigasi -->
        <nav>
            <a href="home.php">Home</a>
            <a href="dataBarang.php">Data Barang</a>
            <a href="dataCustomer.php">Data Customer</a>
            <a href="katalog.php">Katalog</a>
        </nav>

        <!-- Tombol Katalog -->
        <div class="button-container">
            <a href="katalog.php" class="btn btn-katalog">Lihat Katalog</a>
        </div>

        <p>Gunakan menu navigasi di atas atau tombol di bawah untuk mengelola data barang dan pelanggan. Semoga sistem ini dapat membantu Anda dalam mengelola semua kebutuhan pencatatan barang secara lebih mudah dan cepat.</p>
    </div>
</body>
</html>
