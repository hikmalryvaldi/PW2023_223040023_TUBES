<?php
session_start();

// if (isset($_SESSION["login"])) {
//     $username !== "admin" && $password !== "admin";
//     header("Location: ../index.php");
//     exit;
// }

if (!isset($_SESSION["login"])) {
    header("Location: Account/login.php");
}

require '../functions.php';

if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'index.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'index.php';
              </script>";
    }
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Obat</title>

    <!-- Style -->
    <link rel="stylesheet" href="../css/dasboard_style/tambah.css">
</head>

<body>

    <div class="container">
        <div class="title">
            <h1>Tambah Obat</h1>
        </div>

        <form action="" method="post" enctype="multipart/form-data">
            <ul>

                <li>
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama" id="nama" required autocomplete="0">
                </li>
                <li>
                    <label for="harga">Harga :</label>
                    <input type="text" name="harga" id="harga" required autocomplete="0">
                </li>
                <li>
                    <label for="harga_awal">Harga Awal :</label>
                    <input type="text" name="harga_awal" id="harga_awal" required autocomplete="0">
                </li>
                <li>
                    <label for="stok">Stok :</label>
                    <input type="text" name="stok" id="stok" required autocomplete="0">
                </li>
                <li>
                    <label for="gambar">Gambar :</label>
                    <input type="file" name="gambar" id="gambar">
                </li>
                <li>
                    <button type="submit" name="submit">Tambah Obat!</button>
                </li>
            </ul>
        </form>
    </div>

</body>

</html>