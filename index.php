<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: Account/login.php");
}




?>

<!DOCTYPE html>
<html lang="en" id="beranda">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HaloK</title>
    <!-- Font AWS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/page.css" />
</head>

<body>
    <header>
        <div class="navbar">
            <div class="box_left">
                <div class="logo">
                    <h3>HaloK</h3>
                </div>

                <div class="link">
                    <ul>
                        <li><a href="#beranda" class="focus">Beranda</a></li>
                        <li><a href="#dokter">Dokter</a></li>
                        <li><a href="#artikel">Artikel</a></li>
                        <li><a href="#about">Tentang Kami</a></li>
                        <li><a href="#kontak">Kontak</a></li>
                    </ul>
                </div>
            </div>

            <div class="box_right">
                <div class="dropdown">
                    <img src="img/profil/default.png" width="45" alt="profile" onclick="myFunction()" class="dropbtn">
                    <div id="myDropdown" class="dropdown-content">
                        <a href="Account/logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="header-bg">
        <div class="header-bg-img">
            <img src="img/Header Img/Header1.png" alt="img" />
        </div>

        <div class="banner-content">
            <div class="banner-header">
                <h1>Konsultasi Dengan Dokter</h1>
                <p>
                    Dapatkan solusi untuk masalah kesehatan Anda, semua bisa di haloK.
                </p>
            </div>

            <div class="content-halok">
                <div class="card">
                    <div class="card-img">
                        <img src="img/Header Img/Toko Obat.png" alt="RS" />
                    </div>

                    <div class="card-text">
                        <a href="obat.php">
                            <p>Obat Kesehatan</p>
                        </a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img">
                        <img src="img/Header Img/Dokter.png" alt="RS" />
                    </div>

                    <div class="card-text">
                        <p>Dokter Spesialis</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img">
                        <img src="img/Header Img/CardJanjiMedis.png" alt="RS" />
                    </div>

                    <div class="card-text">
                        <p>janji Medis</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img">
                        <img src="img/Header Img/CarsJanjiRS.png" alt="RS" />
                    </div>

                    <div class="card-text">
                        <p>Buat Janji RS</p>
                    </div>
                </div>

                <div class="card-download">
                    <div class="logo-download">
                        <img src="img/Header Img/logo-card.png" alt="logo" />
                    </div>
                    <div class="text-download">
                        <h2>Download Aplikasi</h2>
                        <p>Download haloK Sekarang dan #KonsultasiDariRumahAja</p>
                    </div>
                    <div class="icon-download">
                        <i class="fa-solid fa-download"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="dokter" id="dokter">
        <div class="dokter-header">
            <h1>Dokter Spesialis</h1>
        </div>

        <div class="container-dokter">
            <div class="card-dokter">
                <div class="dokter-img">
                    <img src="img/Dokter Img/GangguanJiwa.png" alt="RS" />
                </div>

                <div class="dokter-text">
                    <p>Gangguan Jiwa</p>
                </div>
            </div>

            <div class="card-dokter">
                <div class="dokter-img">
                    <img src="img/Dokter Img/Gizi.png" alt="RS" />
                </div>

                <div class="dokter-text">
                    <p>Gizi Klinik</p>
                </div>
            </div>

            <div class="card-dokter">
                <div class="dokter-img">
                    <img src="img/Dokter Img/PenyakitDalam.png" alt="RS" />
                </div>

                <div class="dokter-text">
                    <p>Penyakit Dalam</p>
                </div>
            </div>

            <div class="card-dokter">
                <div class="dokter-img">
                    <img src="img/Dokter Img/Psikolog.png" alt="RS" />
                </div>

                <div class="dokter-text">
                    <p>Psikolog</p>
                </div>
            </div>

            <div class="card-dokter">
                <div class="dokter-img">
                    <img src="img/Dokter Img/Akupuntur.png" alt="RS" />
                </div>

                <div class="dokter-text">
                    <p>Akupuntur</p>
                </div>
            </div>
        </div>
    </div>

    <div class="artikel" id="artikel">
        <div class="header-artikel">
            <h1>Baca Artikel</h1>
        </div>

        <div class="artikel-list">
            <ul>
                <li class="span">Terbaru</li>
                <li>Populer</li>
                <li>Jantung</li>
                <li>Hati</li>
                <li>Otak</li>
            </ul>
        </div>

        <div class="artikel-item">
            <div class="artikel-card">
                <img src="img/Artikel Img/Jus2.jpg" alt="artikel" />

                <div class="artikel-text">
                    <h4>Ini Keunggulan Pressed Juice Dibandingkan Jus Biasa</h4>
                    <p class="button-text">Minuman Sehat</p>
                    <p>
                        Salah satu perbedaan mendasar dari pressed juice dan jus biasa
                        terletak pada...
                    </p>
                </div>
            </div>

            <div class="artikel-card">
                <img src="img/Artikel Img/Dosis.jpg" alt="artikel" />

                <div class="artikel-text">
                    <h4>Ibu, Ini Dosis Paracetamol Anak sesuai Anjuran Medis</h4>
                    <p class="button-text">Kesehatan Anak</p>
                    <p>
                        Banyak ibu yang masih tidak memperhatikan dosis sesuai anjuran
                        medis...
                    </p>
                </div>
            </div>

            <div class="artikel-card">
                <img src="img/Artikel Img/Jus.jpg" alt="artikel" />

                <div class="artikel-text">
                    <h4>Catat, Inilah 16 Jenis Sayuran yang Menyehatkan Tubuh</h4>
                    <p class="button-text">Makanan Sehat</p>
                    <p>
                        Sayur adalah jenis kudapan dengan kandungan nutrisi yang lengkap.
                        Beberapa,...
                    </p>
                </div>
            </div>

            <div class="artikel-card">
                <img src="img/Artikel Img/Perawat.png" alt="artikel" />

                <div class="artikel-text">
                    <h4>Catat, Ini Berbagai Wewenang Perawat di Indonesia</h4>
                    <p class="button-text">Hidup Sehat</p>
                    <p>
                        Perawat adalah tenaga medis yang berperan penting dalam mendukung
                        kesehatan...
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="about" id="about">
        <div class="about-img">
            <img src="img/ABout Img/About.jpg" alt="about" />
        </div>

        <div class="about-text">
            <h1>Tentang Kami</h1>
            <p>
                HaloK hadir untuk menjembatani interaksi antara pasien dan dokter
                melalui solusi platform layanan yang terintegrasi dan terlengkap.
            </p>
            <p>
                Dapatkan layanan kesehatan lengkap mulai dari telekonsultasi dengan
                dokter spesialis secara virtual, rujukan untuk pemeriksaan lanjutan,
                pembelian dan pengiriman obat resep, hingga pemesanan vitamin dan
                suplemen.
            </p>
            <p>
                Semua layanan ini bisa Anda dapatkan dalam situs resmi dan aplikasi,
                yang tersedia di Android dan iOS. Segera gunakan HaloK dan manfaatkan
                berbagai promo menarik telekonsultasi dan pembelian obat, serta
                dapatkan informasi kesehatan terbaru yang didukung oleh penelitian
                terkini.
            </p>
        </div>
    </div>

    <div class="kontak" id="kontak">
        <div class="kontak-header">
            <h1>Kontak Kami</h1>
        </div>

        <div class="container-kontak">
            <div class="form-kontak">
                <form action="#">
                    <div class="label nama">
                        <label for="nama">Nama</label><br />
                        <input type="text" id="nama" placeholder="Masukan Nama Anda" />
                    </div>

                    <div class="label email">
                        <label for="email" Email>Email</label><br />
                        <input type="email" id="email" placeholder="Masukan Email Anda" />
                    </div>

                    <div class="label pesan">
                        <label for="pesan">Pesan</label><br />
                        <textarea id="pesan" placeholder="Masukan Pesan Anda"></textarea>
                    </div>

                    <div class="kirim">
                        <input type="submit" value="Kirim Pesan" />
                    </div>
                </form>
            </div>

            <div class="form-social">
                <div class="social-img">
                    <img src="img/Kontak Img/Gambar-contact-us.png" alt="bg" />
                </div>

                <div class="kontak-email">
                    <p>Email</p>
                    <div class="email">
                        <i class="fa-solid fa-envelope"></i>
                        <a href="#">cs@halok.com</a>
                    </div>
                </div>

                <div class="kontak-email">
                    <p>Pusat Informasi</p>
                    <div class="info">
                        <i class="fa-solid fa-phone"></i>
                        <a href="#">+62 123 121 2132</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="js/dropdown.js"></script>

</html>