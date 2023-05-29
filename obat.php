<?php
require 'functions.php';
$toko_obat = ambilData("SELECT * FROM obat");

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
            <li><a href="page.php">Home</a></li>
            <i class="fa-solid fa-chevron-right"></i>
            <li><a href="#"><span>Obat</span></a></li>
            <i class="fa-solid fa-chevron-right"></i>
            <li><a href="tambah.php">Tambah Obat</a></li>
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
                            Rp <?= $row["harga"]; ?>.000
                        </div>

                        <div class="d-produk">
                            <div class="diskon-produk">
                                20%
                            </div>

                            <div class="harga-asli-produk">
                                Rp <?= $row["harga_awal"]; ?>.000
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

        <!-- <div class="card">
            <div class="img">
                <img src="img/produk2.jpg" alt="produk">
            </div>

            <div class="text">
                <div class="nama-produk">
                    Madu Ratik
                </div>

                <div class="detail-harga">
                    <div class="harga-produk">
                        Rp 286.000
                    </div>

                    <div class="d-produk">
                        <div class="diskon-produk">
                            36%
                        </div>

                        <div class="harga-asli-produk">
                            Rp 420.000
                        </div>
                    </div>
                </div>

                <div class="rating">
                    <i class="fa-solid fa-star">
                    </i>
                    <span>4.9</span>
                    <span>|</span>
                    <span>Terjual 750+</span>
                </div>

                <div class="detail">
                    <button><a href="detail_produk/produk2.php">Detail</a></button>
                </div>
            </div>

        </div>

        <div class="card">
            <div class="img">
                <img src="img/produk3.jpg" alt="produk">
            </div>

            <div class="text">
                <div class="nama-produk">
                    Syaraf Kejepit
                </div>

                <div class="detail-harga">
                    <div class="harga-produk">
                        Rp 360.000
                    </div>

                    <div class="d-produk">
                        <div class="diskon-produk">
                            20%
                        </div>

                        <div class="harga-asli-produk">
                            Rp 450.000
                        </div>
                    </div>
                </div>

                <div class="rating">
                    <i class="fa-solid fa-star">
                    </i>
                    <span>4.9</span>
                    <span>|</span>
                    <span>Terjual 1rb+</span>
                </div>

                <div class="detail">
                    <button><a href="detail_produk/produk3.php">Detail</a></button>
                </div>
            </div>

        </div>

        <div class="card">
            <div class="img">
                <img src="img/produk4.jpg" alt="produk">
            </div>

            <div class="text">
                <div class="nama-produk">
                    Madu Prowasir
                </div>

                <div class="detail-harga">
                    <div class="harga-produk">
                        Rp 336.000
                    </div>

                    <div class="d-produk">
                        <div class="diskon-produk">
                            20%
                        </div>

                        <div class="harga-asli-produk">
                            Rp 420.000
                        </div>
                    </div>
                </div>

                <div class="rating">
                    <i class="fa-solid fa-star">
                    </i>
                    <span>4.9</span>
                    <span>|</span>
                    <span>Terjual 250+</span>
                </div>

                <div class="detail">
                    <button><a href="detail_produk/produk4.php">Detail</a></button>
                </div>
            </div>

        </div>

        <div class="card">
            <div class="img">
                <img src="img/produk5.jpg" alt="produk">
            </div>

            <div class="text">
                <div class="nama-produk">
                    Sidaguri
                </div>

                <div class="detail-harga">
                    <div class="harga-produk">
                        Rp 268.000
                    </div>

                    <div class="d-produk">
                        <div class="diskon-produk">
                            36%
                        </div>

                        <div class="harga-asli-produk">
                            Rp 420.000
                        </div>
                    </div>
                </div>

                <div class="rating">
                    <i class="fa-solid fa-star">
                    </i>
                    <span>4.9</span>
                    <span>|</span>
                    <span>Terjual 750+</span>
                </div>

                <div class="detail">
                    <button><a href="detail_produk/produk5.php">Detail</a></button>
                </div>
            </div>

        </div>

        <div class="card">
            <div class="img">
                <img src="img/produk6.jpg" alt="produk">
            </div>

            <div class="text">
                <div class="nama-produk">
                    Minyak Sapu Jagat
                </div>

                <div class="detail-harga">
                    <div class="harga-produk">
                        Rp 312.000
                    </div>

                    <div class="d-produk">
                        <div class="diskon-produk">
                            20%
                        </div>

                        <div class="harga-asli-produk">
                            Rp 420.000
                        </div>
                    </div>
                </div>

                <div class="rating">
                    <i class="fa-solid fa-star">
                    </i>
                    <span>4.9</span>
                    <span>|</span>
                    <span>Terjual 550+</span>
                </div>

                <div class="detail">
                    <button><a href="detail_produk/produk6.php">Detail</a></button>
                </div>
            </div>

        </div>

        <div class="card">
            <div class="img">
                <img src="img/produk7.jpg" alt="produk">
            </div>

            <div class="text">
                <div class="nama-produk">
                    Obat Batu Ginjal
                </div>

                <div class="detail-harga">
                    <div class="harga-produk">
                        Rp 336.000
                    </div>

                    <div class="d-produk">
                        <div class="diskon-produk">
                            20%
                        </div>

                        <div class="harga-asli-produk">
                            Rp 420.000
                        </div>
                    </div>
                </div>

                <div class="rating">
                    <i class="fa-solid fa-star">
                    </i>
                    <span>4.9</span>
                    <span>|</span>
                    <span>Terjual 250+</span>
                </div>

                <div class="detail">
                    <button><a href="detail_produk/produk7.php">Detail</a></button>
                </div>
            </div>

        </div>

        <div class="card">
            <div class="img">
                <img src="img/produk8.jpg" alt="produk">
            </div>

            <div class="text">
                <div class="nama-produk">
                    Gagal Ginjal
                </div>

                <div class="detail-harga">
                    <div class="harga-produk">
                        Rp 400.000
                    </div>

                    <div class="d-produk">
                        <div class="diskon-produk">
                            30%
                        </div>

                        <div class="harga-asli-produk">
                            Rp 820.000
                        </div>
                    </div>
                </div>

                <div class="rating">
                    <i class="fa-solid fa-star">
                    </i>
                    <span>5.0</span>
                    <span>|</span>
                    <span>Terjual 3rb+</span>
                </div>

                <div class="detail">
                    <button><a href="detail_produk/produk8.php">Detail</a></button>
                </div>
            </div>

        </div> -->
    </div>
</body>

</html>