<?php
$db = mysqli_connect("localhost", "root", "", "pertemuan7");

function query($query){
	global $db;
	$result = mysqli_query($db, $query);
	$rows = [];
	while($row = mysqli_fetch_object($result)){
		$rows[]=$row;
	}
	
	return $rows;
}


function tambah($data){
	global $db;
	// ambil data dari tiap elemen dalam form
	$nama = htmlspecialchars($data["nama"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$JenisKelamin = htmlspecialchars($data["JenisKelamin"]);
	$agama = htmlspecialchars($data["agama"]);
	$sekolah = htmlspecialchars($data["sekolah"]);

	$query = "INSERT INTO siswa
				VALUES
				('', '$nama', '$alamat', '$JenisKelamin', '$agama', '$sekolah')
				";
	// query insert data
	mysqli_query($db, $query);

	return mysqli_affected_rows($db);
}


?>