<?php 
$db = mysqli_connect("localhost", "root", "", "delapan");

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

function ubah($data){
	global $db;
	$id = $data["id"];
	// ambil data dari tiap elemen dalam form
	$nama = htmlspecialchars($data["nama"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$JenisKelamin = htmlspecialchars($data["JenisKelamin"]);
	$agama = htmlspecialchars($data["agama"]);
	$sekolah = htmlspecialchars($data["sekolah"]);

	$query = "UPDATE siswa SET 
				nama = '$nama', 
				alamat ='$alamat',
				JenisKelamin = '$JenisKelamin',
				agama = '$agama',
				sekolah = '$sekolah'
				WHERE id = $id
			";
	// query insert data
	mysqli_query($db, $query);

	return mysqli_affected_rows($db);
}

function hapus($id){
	global $db;
	mysqli_query($db, "DELETE FROM siswa WHERE id = $id");
	return mysqli_affected_rows($db);
}




?>