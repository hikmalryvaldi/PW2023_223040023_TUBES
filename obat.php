<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: Account/login.php");
}

// if (isset($_SESSION["login"])) {
//     $row["username"] && $row["password"];
//     header("Location: obat.php");
//     exit;
// }
// elseif (!isset($_SESSION["login"])) {
//     header("Location: page.php");
// }

// if (!isset($_SESSION["login2"])) {
//     header("Location: Account/login.php");
// }








require 'functions.php';
$toko_obat = ambilData("SELECT * FROM obat LIMIT 8");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obat</title>

    <!-- Font AWS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <link rel="stylesheet" href="css/obat.css">
</head>

<body>
    <div class="header-produk-card">
        <h1>Obat Terlaris !!</h1>
    </div>

    <div class="link">
        <ul>
            <li><a href="index.php">Home</a></li>
            <i class="fa-solid fa-chevron-right"></i>
            <li><a href="#"><span>Obat</span></a></li>
        </ul>
    </div>

    <div class="produk-card">

        <?php foreach ($toko_obat as $row) : ?>
            <div class="card">
                <div class="img">
                    <img src="img/<?= $row["gambar"]; ?>" width="50" alt="produk">
                </div>

                <div class="text">
                    <div class="nama-produk">
                        <?= $row["nama"]; ?>
                    </div>

                    <div class="detail-harga">
                        <div class="harga-produk">
                            Rp <?= number_format($row["harga"]); ?>
                        </div>

                        <div class="d-produk">
                            <div class="diskon-produk">
                                20%
                            </div>

                            <div class="harga-asli-produk">
                                Rp <?= number_format($row["harga_awal"]); ?>
                            </div>
                        </div>
                    </div>

                    <div class="rating">
                        <i class="fa-solid fa-star">
                        </i>
                        <span>5.0</span>
                        <span>|</span>
                        <span>Terjual 500+</span>
                    </div>

                    <div class="detail">
                        <button type="submit" name="test"><a href="cart/detail.php?id=<?= $row["id"]; ?>">Detail</a></button>
                    </div>
                </div>

            </div>

        <?php endforeach ?>
    </div>
</body>

</html>