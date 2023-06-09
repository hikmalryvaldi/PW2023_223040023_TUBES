<?php
session_start();

if ($_SESSION['role'] !== 'admin') {
    header("Location: ../index.php");
    exit;
}

require '../functions.php';

$dataPerhalaman = 5;
$result = mysqli_query($koneksi, "SELECT * FROM obat");
$jumlahdata = count(ambilData("SELECT * FROM obat"));
$jumlahHalaman = ceil($jumlahdata / $dataPerhalaman);
$halaman = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($dataPerhalaman * $halaman) - $dataPerhalaman;

$toko_obat = ambilData("SELECT * FROM obat LIMIT $awalData, $dataPerhalaman");
// $toko_obat = ambilData("SELECT * FROM obat");

if (isset($_POST["cari"])) {
    $toko_obat = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>

    <!-- font aws -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="../css/dasboard_style/admin_style.css">

</head>

<body>
    <div class="container">
        <div class="box-left">
            <div class="logo">
                <h1>HaloK</h1>
            </div>

            <div class="admin">
                <ul>
                    <li><i class="fa-solid fa-cart-shopping"></i><a href="../obat.php">Product</a></li>
                    <li><i class="fa-solid fa-table"></i>Dashboard</li>
                    <li><i class="fa-solid fa-chart-pie"></i>Statistic</li>
                    <li><i class="fa-solid fa-bars-progress"></i>Stok</li>
                    <li><i class="fa-solid fa-comment-dollar"></i>Offer</li>
                    <li><a href="../Account/logout.php">Logout</a></li>
                </ul>
            </div>
        </div>

        <div class="box-right">
            <div class="header">
                <div class="h-flex">
                    <h1>Halaman Admin</h1>
                    <a href="../index.php">Home</a>
                </div>

                <div class="data_produk">
                    <div class="daftar_produk">
                        <div class="tittle">
                            <h4>Daftar Produk</h4>
                        </div>

                        <div class="invoice">
                            <button onclick="generatePDF()">Download PDF</button>
                        </div>

                    </div>

                    <div class="tambah_obat">
                        <a href="tambah.php">Tambah Obat</a>
                        <form action="" method="post">

                            <input type="text" name="keyword" size="20" placeholder="Cari Obat" autocomplete="off" id="keyword">
                            <button type="submit" name="cari" id="tombol-cari">Cari</button>

                        </form>
                    </div>

                    <div class="table_obat" id="container">
                        <table border="1" cellpadding="10" cellspacing="0" id="invoice">
                            <tr>
                                <th>No</th>
                                <th>Obat</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>

                            <?php $i = 1; ?>
                            <?php foreach ($toko_obat as $row) : ?>
                                <tr>
                                    <td><?= $i + $awalData; ?></td>
                                    <td><?= $row["nama"]; ?></td>
                                    <td>Rp <?= number_format($row["harga"]); ?></td>
                                    <td><?= $row["stok"]; ?></td>
                                    <td><img src="../img/<?= $row["gambar"]; ?>" width="50" alt=""></td>
                                    <td><a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>
                                        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach ?>
                        </table>

                    </div>


                    <!-- Navigasi -->

                    <div class="nav">
                        <?php if ($halaman > 1) : ?>
                            <a href="?halaman=<?= $halaman - 1 ?>">&laquo;</a>
                        <?php endif; ?>
                        <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                            <?php if ($i == $halaman) : ?>
                                <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: blue;"><?= $i; ?></a>
                            <?php else : ?>
                                <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
                            <?php endif; ?>
                        <?php endfor; ?>
                        <?php if ($halaman < $jumlahHalaman) : ?>
                            <a href="?halaman=<?= $halaman + 1 ?>">&raquo;</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="../js/script.js"></script>

    <script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
</body>

</html>