<?php
session_start();

// if (isset($_SESSION["login"])) {
//     $username !== "admin" && $password !== "admin";
//     header("Location: ../page.php");
//     exit;
// }

if (!isset($_SESSION["login"])) {
    header("Location: Account/login.php");
}

require '../functions.php';

$id = $_GET["id"];

$obat = ambilData("SELECT * FROM obat WHERE id = $id")[0];

if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Obat</title>

    <link rel="stylesheet" href="../css/dasboard_style/ubah.css">
</head>

<body>

    <div class="container">
        <div class="title">
            <h1>Ubah Data Obat</h1>
        </div>

        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $obat["id"]; ?>">
            <input type="hidden" name="gambarLama" value="<?= $obat["gambar"]; ?>">
            <ul>

                <li>
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama" id="nama" required value="<?= $obat["nama"]; ?>">
                </li>
                <li>
                    <label for="harga">Harga :</label>
                    <input type="text" name="harga" id="harga" required value="<?= $obat["harga"]; ?>">
                </li>
                <li>
                    <label for="harga_awal">Harga Awal :</label>
                    <input type="text" name="harga_awal" id="harga_awal" required value="<?= $obat["harga_awal"]; ?>">
                </li>
                <li>
                    <label for="stok">Stok :</label>
                    <input type="text" name="stok" id="stok" required value="<?= $obat["stok"]; ?>">
                </li>
                <li>
                    <label for="gambar">Gambar :</label> <br>
                    <!-- <img src="../img/<?= $obat["gambar"]; ?>" width="50" alt=""> -->
                    <input type="file" name="gambar" id="gambar">
                </li>

                <li>
                    <button type="submit" name="submit">Ubah Data Obat!</button>
                </li>
            </ul>
        </form>
    </div>
</body>

</html>