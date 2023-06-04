<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: Account/login.php");
}
require '../functions.php';

// ambil data di url
$id = $_GET["id"];

// query data berdasarkan id
$obat = ambilData("SELECT * FROM obat WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <!-- Font Aws -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../css/detail_produk/produk1.css">
</head>

<body>
    <div class="link">
        <ul>
            <li><a href="../index.php">Home</a></li>
            <i class="fa-solid fa-chevron-right"></i>
            <li><a href="../obat.php">Obat</a></li>
            <i class="fa-solid fa-chevron-right"></i>
            <li><a href="#"><span></span></a></li>
        </ul>
    </div>

    <div class="container">
        <div class="box-left">
            <img src="../img/<?= $obat["gambar"]; ?>" alt="produk">
        </div>

        <div class="box-right">
            <div class="produk">
                <div class="nama-produk">
                    <?= $obat["nama"]; ?>
                </div>

                <div class=" rating">
                    <p>Terjual <span>500+</span></p>
                    <i class="fa-solid fa-star"></i>
                    <p>5.0 <span>(575 rating)</span></p>
                    <p>Diskusi <span>(76)</span>
                    </p>
                </div>

                <div class="harga">
                    <h1>Rp <?= $obat["harga"]; ?>.000</h1>

                    <div class="promo">
                        <div class="diskon">
                            20%
                        </div>

                        <div class="harga-asli">
                            Rp <?= $obat["harga_awal"]; ?>.000
                        </div>
                    </div>
                </div>
            </div>

            <div class="deskripsi">
                <div class="detail">
                    <div class="detail-left">
                        Detail
                    </div>

                    <div class="detail-right">
                        Info Penting
                    </div>
                </div>

                <div class="kondisi">
                    <p>kondisi: <span>Baru</span></p>
                    <p>Berat Satuan: <span>628 g</span></p>
                    <p>Kategori: <span class="bold">Obat Herbal</span></p>
                    <p>Stok: <span class="bold"><?= $obat["stok"]; ?></span></p>
                </div>

                <div class="beli">
                    <button type="submit" name="beli">
                        <a href="#?id=<?= $obat["id"]; ?>">Beli</a>
                    </button>
                </div>
            </div>

        </div>
    </div>

</body>

</html>