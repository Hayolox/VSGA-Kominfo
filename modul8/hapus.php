<?php 

require 'functions.php';

$id = $_GET["id"];

//perkondisian function hapus
if(hapus($id) >0 ){
	echo "
				<script>
					alert('data berhasil dihapus!');
					document.location.href = 'pendaftar.php';
				</script>
		";
	} else {
		echo "
		<script>
					alert('data gagal dihapus!');
					document.location.href = 'pendaftar.php';
				</script>
		";
	}


 ?>