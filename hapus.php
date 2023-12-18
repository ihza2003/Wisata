<?php 
session_start();

if( !isset($_SESSION["uid"]) ) {
	header("Location: login.php");
	exit;
}

require 'function.php';

$id = $_GET["id"];

if( hapus($id) > 0 ) {
	echo "
		<script>
			alert('data berhasil dihapus!');
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

?>