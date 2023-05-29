<?php
require '../functions.php';

// ambil data di url
$id = $_GET["id"];

// query data berdasarkan id
$obat = ambilData("SELECT * FROM obat WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil di ubah atau tidak
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Diubah!');
                document.location.href = '../obat.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Gagal Diubah!');
                document.location.href = '../obat.php';
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
    <title>Ubah Data Obat</title>
</head>

<body>

    <h1>Ubah Data Obat</h1>

    <form action="" method="post">
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
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar" required value="<?= $obat["gambar"]; ?>">
            </li>
            <li>
                <label for="page">Page :</label>
                <input type="text" name="page" id="page" required value="<?= $obat["page"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data Obat!</button>
            </li>

        </ul>
    </form>

</body>

</html>