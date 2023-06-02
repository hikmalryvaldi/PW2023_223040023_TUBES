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

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO obat
     VALUES (NULL, '$nama', '$harga', '$hargaAwal', '$stok', '$gambar')
    ";

    mysqli_query($koneksi, $query);

    // akan mengecek data berhasil ditambahkan atau tidak
    return mysqli_affected_rows($koneksi);
};

function upload()
{

    $namaFile = $_FILES["gambar"]["name"];
    $ukuranFile = $_FILES["gambar"]["size"];
    $error = $_FILES["gambar"]["error"];
    $tmpName = $_FILES["gambar"]["tmp_name"];

    if ($error === 4) {
        echo "<script>
            alert('Pilih Gambar');        
        </script>";

        return false;
    }

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    // $ekstensiGambar = strtolower(pathinfo($namaFile, PATHINFO_EXTENSION));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
            alert('Yang Di Upload Bukan Gambar!!');        
        </script>";

        return false;
    }

    if ($ukuranFile > 1000000) {
        echo "<script>
            alert('Ukuran Gambar Terlalu Besar!!');        
        </script>";

        return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;


    move_uploaded_file($tmpName, '../img/' . $namaFileBaru);

    return $namaFileBaru;
}

function hapus($id)
{
    global $koneksi;

    mysqli_query($koneksi, "DELETE FROM obat WHERE id = $id");

    return mysqli_affected_rows($koneksi);
};

function ubah($post)
{
    global $koneksi;

    $id = $post["id"];
    $nama = htmlspecialchars($post["nama"]);
    $harga = htmlspecialchars($post["harga"]);
    $hargaAwal = htmlspecialchars($post["harga_awal"]);
    $stok = htmlspecialchars($post["stok"]);
    $gambarLama = htmlspecialchars($post["gambarLama"]);

    if ($_FILES["gambar"]["error"] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE obat SET
                nama = '$nama',
                harga = '$harga',
                harga_awal = '$hargaAwal',
                stok = '$stok',
                gambar = '$gambar'
              WHERE
                id = $id";
    mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
    return mysqli_affected_rows($koneksi);
}

function cari($keyword)
{

    $query = "SELECT * FROM obat
                WHERE
                    nama LIKE '%$keyword%' OR 
                    harga LIKE '%$keyword%' OR
                    stok LIKE '%$keyword%'
            ";
    return ambilData($query);
}

function registrasi($post)
{
    global $koneksi;

    $username = strtolower(stripslashes($post["username"]));
    $password = mysqli_real_escape_string($koneksi, $post["password"]);
    $email = strtolower(stripslashes($post["email"]));

    $result = mysqli_query($koneksi, "SELECT username FROM users WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah terdafdar!');
            </script>";

        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($koneksi, "INSERT INTO users VALUES(NULL, '$username', '$password', '$email')");

    return mysqli_affected_rows($koneksi);
}
