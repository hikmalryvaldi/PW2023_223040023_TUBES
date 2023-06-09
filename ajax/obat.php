<?php

require '../functions.php';

$keyword = $_GET["keyword"];
$query = "SELECT * FROM obat
          WHERE
            nama LIKE '%$keyword%' OR 
            harga LIKE '%$keyword%' OR
            stok LIKE '%$keyword%'
";

$obat = ambilData("$query");

?>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Obat</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Gambar</th>
        <th>Aksi</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($obat as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
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