<?php
require '../functions.php';
$toko_obat = ambilData("SELECT * FROM obat");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>

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
                    <li>Data Produk</li>
                    <li>Module</li>
                    <li>Setting Website</li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>
        </div>

        <div class="box-right">
            <div class="header">
                <p>Halaman Admin</p>
            </div>

            <div class="data_produk">
                <div class="daftar_produk">
                    <h4>Daftar Produk</h4>
                </div>

                <div class="tambah_obat">
                    <a href="tambah.php">Tambah Obat</a>
                </div>

                <div class="table_obat">
                    <table border="1" cellpadding="10" cellspacing="0">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>

                        <?php $i = 1; ?>
                        <?php foreach ($toko_obat as $row) : ?>
                            <tr>
                                <td></td>
                                <td><?= $row["nama"]; ?></td>
                                <td>Rp <?= $row["harga"]; ?>.000</td>
                                <td><?= $row["stok"]; ?></td>
                                <td><img src="../img/<?= $row["gambar"]; ?>" width="50" alt=""></td>
                                <td><a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
                                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>