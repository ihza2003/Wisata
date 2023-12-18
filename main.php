<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Raja Ampat</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" integrity="sha512-doJrC/ocU8VGVRx3O9981+2aYUn3fuWVWvqLi1U+tA2MWVzsw+NVKq1PrENF03M+TYBP92PnYUlXFH1ZW0FpLw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <!-- Bootstrap -->
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

  <!-- Slick -->
  <link type="text/css" rel="stylesheet" href="css/slick.css" />
  <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

  <!-- nouislider -->
  <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="css/font-awesome.min.css" />

  <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="css/style.css" />
  <link type="text/css" rel="stylesheet" href="css/accountbtn.css" />
</head>

<body>
  <div class="wrap">
    <!-- bagian NAV -->
    <nav class="navbar navbar-expand-lg bg-transparent fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger text-white" href="main.html">Tour Raja Ampat</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger active" aria-current="page" href="main.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="About.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="Activies.html">Activies</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="Contact.html">Contact</a>
            </li>

            <li class="nav-item">
              <?php
              include "db.php";
              if (isset($_SESSION["uid"])) {
                $sql = "SELECT nama FROM user WHERE id='$_SESSION[uid]'";
                $query = mysqli_query($con, $sql);
                $row = mysqli_fetch_array($query); ?>

                <div class="dropdown">
                  <a class="nav-link js-scroll-trigger" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <?= $row['nama']; ?>
                  </a>

                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">My Profile</a></li>
                    <li><a class="dropdown-item" href="logout.php">Log out</a></li>
                  </ul>
                </div>
              <?php } else {; ?>
                <div class="dropdown">
                  <a class="nav-link js-scroll-trigger" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    Akun
                  </a>

                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="login.php">Login</a></li>
                    <li><a class="dropdown-item" href="reg.php">Register</a></li>
                  </ul>
                </div>
              <?php }; ?>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- End nav -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="image/bg1.jpg" class="d-block w-100" alt="..." style="object-fit: cover" />
          <div class="carousel-caption">
            <h5 class="fs-1 animated bounceInRight" style="color:white;animation-delay: 1s">
              Selamat Datang di Raja Ampat
            </h5>
            <p class="d-none d-sm-block animated bounceInLeft" style="animation-delay: 2s">
              Wisata Terbaik di Papua
            </p>
            <a class="btn btn primary btn-lg animated bounceInRight" style="animation-delay: 2s" href="https://kenali.co.id/wisata-paling-indah-di-indonesia-salah-satunya-raja-ampat/berita-jambi-hari-ini/" role="button">kunjungi</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="image/slide2.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption">
            <h5 class="fs-1 animated slideInDown" style="color:white;animation-delay: 1s">
              Resor di Raja Ampat
            </h5>
            <p class="d-none d-sm-block animated fadeInUp" style="animation-delay: 2s">
              Resor terbaik di pulau ini
            </p>
            <a class="btn btn primary btn-lg animated zoomIn" style="animation-delay: 2s" href="https://www.tripadvisor.co.id/Hotels-g2303999-zff8-Raja_Ampat_West_Papua-Hotels.html" role="button">kunjungi</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="image/slide3.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption">
            <h5 class="fs-1 animated zoomIn" style="color:white; animation-delay: 1s">
              Dive the richest house reef of the world
            </h5>
            <p class="d-none d-sm-block animated bounceInLeft" style="animation-delay: 2s">
              Proven by science 2012
            </p>
            <a class="btn btn primary btn-lg bg-Danger animated zoomIn" style="animation-delay: 2s" href="https://www.indonesia.travel/id/id/ide-liburan/mau-wisata-ke-raja-ampat-ini-8-spot-menyelam-terbaiknya" role="button">kunjungi</a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- video -->
    <section id="content-video">
      <div class="container my-5">
        <div class="row justify-content-center text-center">
          <div class="col-lg-10 col-sm-10 col-md-20">
            <h3>List Wisata</h3>
            <?php
            require 'function.php';

            // pagination
            // konfigurasi
            $jumlahDataPerHalaman = 2;
            $jumlahData = count(query("SELECT * FROM wisata"));
            $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
            $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
            $awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

            $wisata = query("SELECT * FROM wisata LIMIT $awalData, $jumlahDataPerHalaman");

            // tombol cari ditekan
            if (isset($_POST["cari"])) {
              $wisata = cari($_POST["keyword"]);
            }
            ?>

            <a href="#" class="btn btn-primary" data-bs-target="#tambah1" data-bs-toggle="modal">Tambah data wisata</a>
            <br><br>



            <!-- Modal -->
            <div class="modal fade" id="tambah1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="tambah1">Tambah Data Wisata</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <?php

                    require 'function.php';

                    // cek apakah tombol submit sudah ditekan atau belum
                    if (isset($_POST["submit"])) {

                      // cek apakah data berhasil di tambahkan atau tidak
                      if (tambah($_POST) > 0) {
                        echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'main.php';
			</script>
		";
                      } else {
                        echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'main.php';
			</script>
		";
                      }
                    }
                    ?>
                    <form action="" method="post" enctype="multipart/form-data">
                      <div class="mb-3">
                        <label for="nama" class="form-label text-start">Nama Wisata</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama Wisata">
                      </div>

                      <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi Wisata</label>
                        <input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="Masukan Detail Deskripsi">
                      </div>

                      <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar Wisata</label>
                        <input type="file" name="gambar" class="form-control" id="gambar" placeholder="Masukan Nama Wisata">
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="submit">Tambah</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>

            <!-- Modal 2 -->
            <!-- <div class="modal fade" id="edit1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="edit1">Edit Data Wisata</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                    <form action="ubah.php" method="post" enctype="multipart/form-data">
                      <input type="hidden" name="id" value="<?= $wisata["id"]; ?>">
                      <input type="hidden" name="gambarLama" value="<?= $wisata["gambar"]; ?>">
                      <div class="mb-3">
                        <label for="nama" class="form-label text-start">Nama Wisata</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama Wisata" value="<?= $wisata["judul"]; ?>">
                      </div>

                      <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi Wisata</label>
                        <input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="Masukan Detail Deskripsi" value="<?= $wisata["deskripsi"]; ?>">
                      </div>

                      <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar Wisata</label>
                        <img src="img/<?= $wisata['gambar']; ?>" width="40">
                        <input type="file" name="gambar" class="form-control" id="gambar" placeholder="Masukan Nama Wisata">
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="ubahdata">Ubah Data</button>
                  </div>
                  </form>
                </div>
              </div>
            </div> -->

            <form class="d-flex justify-content-center" action="" method="post" role="search">

              <!-- <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
              <button type="submit" name="cari">Cari!</button> -->

              <input class="form-control me-2" style="width: 300px;" type="search" name="keyword" placeholder="masukkan keyword pencarian.." aria-label="Search" autocomplete="off">
              <button class="btn btn-outline-primary" type="submit" name="cari">cari!!</button>
            </form>


            <!-- navigasi -->
            <a href="?halaman=1">awal</a>

            <?php if ($halamanAktif > 1) : ?>
              <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
              <?php if ($i == $halamanAktif) : ?>
                <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
              <?php else : ?>
                <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
              <?php endif; ?>
            <?php endfor; ?>

            <?php if ($halamanAktif < $jumlahHalaman) : ?>
              <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
            <?php endif; ?>

            <a href="?halaman=<?= $jumlahHalaman; ?>">akhir</a>

            <br>

            <div class="container mt-5">
              <div class="row justify-content-center">
                <div class="col-lg-10">
                  <?php if (empty($wisata)) : ?>
                    <p>Belum ada data wisata yang ditampilkan.</p>
                  <?php else : ?>
                    <table class="table table-bordered table-striped text-center">
                      <thead class="table-dark">
                        <tr>
                          <th scope="col">No.</th>
                          <th scope="col">Gambar</th>
                          <th scope="col">Nama Wisata</th>
                          <th scope="col">Deskripsi</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($wisata as $row) : ?>
                          <tr>
                            <td><?= $i; ?></td>
                            <!-- <td>
                            <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
                            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
                          </td> -->
                            <td><img src="gambar_wisata/<?= $row["gambar"]; ?>" width="50"></td>
                            <td><?= $row["judul"]; ?></td>
                            <td><?= $row["deskripsi"]; ?></td>
                            <td>
                              <a href="ubah.php?id=<?= $row["id"]; ?>" class="btn btn-primary">
                                <i class="bi bi-pencil-fill"></i> Edit
                              </a>
                              <!-- Tombol Hapus -->
                              <a href="hapus.php?id=<?= $row["id"]; ?>" class="btn btn-danger" onclick="return confirm('Yakin hapus data ini?');">
                                <i class="bi bi-trash-fill"></i> Hapus
                              </a>
                            </td>
                          </tr>
                          <?php $i++; ?>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  <?php endif; ?>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- end video -->

    <footer class="text-center text-lg-start text-white" style="background-color: #a48852">
      <!-- Grid container -->
      <div class="container p-2 pb-0">
        <!-- Section: Copyright -->
        <section class="p-3 pt-0">
          <div class="row d-flex align-items-center">
            <!-- Grid column -->
            <div class="col-md-7 col-lg-8 text-center text-md-start">
              <!-- Copyright -->
              <div class="p-3">
                © 2020 Copyright:
                <a class="text-white" href="main.html" style="text-decoration: none">Raja Ampat</a>
              </div>
              <!-- Copyright -->
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
              <!-- Twitter -->
              <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button" href="https://m.facebook.com/papuadivingresorts?refsrc=deprecated&_rdr">
                <i class="fa-brands fa-facebook"></i></a>

              <!-- Instagram -->
              <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button" href="https://instagram.com/papuadivingresorts?igshid=YmMyMTA2M2Y=">
                <i class="fab fa-instagram"></i></a>

              <!-- youtube -->
              <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button" href="https://youtube.com/c/papuadiving">
                <i class="fa-brands fa-youtube"></i></a>
            </div>
            <!-- Grid column -->
          </div>
        </section>
        <!-- Section: Copyright -->
      </div>
      <!-- Grid container -->
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var navbar = document.querySelector(".container");

      window.addEventListener("scroll", function() {
        if (window.scrollY > 50) { // Adjust the scroll threshold as needed
          navbar.style.backgroundColor = "#d1c3a8"; // Set the background color on scroll
        } else {
          navbar.style.backgroundColor = "transparent"; // Set the initial background color when scrolled to the top
        }
      });
    });
  </script>
</body>

</html>