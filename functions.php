<?php
// Koneksi ke database obat
$koneksi = mysqli_connect("localhost", "root", "", "toko_obat");

function ambilData($query)
{

    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
};

// parameter $post adalah data yang diketikkan oleh user
function tambah($post)
{
    global $koneksi;

    // ambil data dari tiap elemen dalam form
    $nama = htmlspecialchars($post["nama"]);
    $harga = htmlspecialchars($post["harga"]);
    $hargaAwal = htmlspecialchars($post["harga_awal"]);
    $stok = htmlspecialchars($post["stok"]);
    $gambar = htmlspecialchars($post["gambar"]);
    $page = htmlspecialchars($post["page"]);

    // query insert data
    $query = "INSERT INTO obat
     VALUES (NULL, '$nama', '$harga', '$hargaAwal', '$stok', '$gambar', '$page')
    ";

    mysqli_query($koneksi, $query);

    // akan mengecek data berhasil ditambahkan atau tidak
    return mysqli_affected_rows($koneksi);
};

function hapus($id)
{
    global $koneksi;

    mysqli_query($koneksi, "DELETE FROM obat WHERE id = $id");

    return mysqli_affected_rows($koneksi);
}
