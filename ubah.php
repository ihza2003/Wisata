<?php
session_start();

if (!isset($_SESSION["uid"])) {
	header("Location: login.php");
	exit;
}

require 'function.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$wisata = query("SELECT * FROM wisata WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

	// cek apakah data berhasil diubah atau tidak
	if (ubah($_POST) > 0) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'main.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'main.php';
			</script>
		";
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Ubah data Wisata</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" integrity="sha512-doJrC/ocU8VGVRx3O9981+2aYUn3fuWVWvqLi1U+tA2MWVzsw+NVKq1PrENF03M+TYBP92PnYUlXFH1ZW0FpLw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
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

<body style="background-color: #d1c3a8;">
	<!-- <h1>Ubah data mahasiswa</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $wisata["id"]; ?>">
		<input type="hidden" name="gambarLama" value="<?= $wisata["gambar"]; ?>">
		<ul>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" value="<?= $wisata["judul"]; ?>">
			</li>
			<li>
				<label for="deskripsi">Deskripsi :</label>
				<input type="text" name="deskripsi" id="deskripsi" value="<?= $wisata["deskripsi"]; ?>">
			</li>
			<li>
				<label for="gambar">Gambar :</label> <br>
				<img src="img/<?= $wisata['gambar']; ?>" width="40"> <br>
				<input type="file" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data!</button>
			</li>
		</ul> -->

	<div class="container d-flex justify-content-center">
		<div class="card" style="width: 700px; margin-top:100px;">
			<h5 class="card-header text-center">Ubah data Wisata</h5>
			<div class="card-body">
				<form action="" method="post" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?= $wisata["id"]; ?>">
					<input type="hidden" name="gambarLama" value="<?= $wisata["gambar"]; ?>">
					<div class="mb-3">
						<label for="nama" class="form-label">Nama Wisata</label>
						<input type="text" class="form-control" name="nama" id="nama" value="<?= $wisata["judul"]; ?>">
					</div>
					<div class="mb-3">
						<label for="deskripsi" class="form-label">Deskripsi</label>
						<input type="text" class="form-control" name="deskripsi" id="deskripsi" value="<?= $wisata["deskripsi"]; ?>">
					</div>
					<div class="mb-3">
						<label for="gambar" class="form-label">Gambar</label>
						<!-- <img src="img/<?= $wisata['gambar']; ?>" width="40"> -->
						<img src="gambar_wisata/<?= $wisata['gambar']; ?>" width="40">
						<input type="file" class="form-control" name="gambar" id="gambar">
					</div>

					<div class="row">
						<div class="col text-center">
							<button type="submit" class="btn btn-primary" name="submit">Ubah Data!</button>
						</div>
						<div class="col text-center">
							<a href="main.php" class="btn btn-secondary">Kembali</a>
						</div>
					</div>

					<!-- <button type="submit" class="btn btn-primary" name="submit">Ubah Data!</button> -->
				</form>
			</div>
		</div>
	</div>


</body>

</html>