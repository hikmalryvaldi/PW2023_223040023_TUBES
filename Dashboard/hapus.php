<?php
session_start();

// if (isset($_SESSION["login"])) {
//   $username !== "admin" && $password !== "admin";
//   header("Location: ../page.php");
//   exit;
// }
require '../functions.php';

$id = $_GET["id"];

if (hapus($id) > 0) {
  echo "<script>
                alert('Data Berhasil Dihapus!');
                document.location.href = 'index.php';
              </script>";
} else {
  echo "<script>
                alert('Data Gagal Dihapus!');
                document.location.href = 'index.php';
              </script>";
}
