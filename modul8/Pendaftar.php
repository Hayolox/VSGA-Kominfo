<?php 

    session_start();

    //pengecekan session
    if (!isset($_SESSION["loginAdmin"])) {
      header("Location: login.php");
      exit;
   }

   //menghubungkan function dan menampilkan semua data siswa
    require "functions.php";
    $data = query("SELECT * FROM siswa");

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Modul 8</title>
  </head>
  <body>
 <div class="container">
      <a href="index.php" class="btn btn-info mt-2">Kembali</a>
      <a href="logout.php" class="btn btn-info mt-2">Logout</a>
     <div class="row mt-3">
     <table class="table">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Agama</th>
            <th scope="col">Asal Sekolah</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        

     <?php foreach($data as $dt) : ?>
      <tbody>
            <tr>
            <th scope="row">1</th>
            <td><?= $dt->nama ?></td>
            <td><?= $dt->alamat ?></td>
            <td><?php 
              // perkondisian JenisKelamin
              if ($dt->JenisKelamin == "l") {
                echo "Laki-laki";
              } elseif ($dt->JenisKelamin == "p") {
                echo "Perempuan";
              } else {
                echo "";
              }
            ?></td>
            <td><?= $dt->agama ?></td>
            <td><?= $dt->sekolah ?></td>
            <td>
            <a href="ubah.php?id=<?= $dt->id ?>">Edit</a>
            <a href="hapus.php?id=<?= $dt->id ?>">Delete</a>
            </td>
            </tr>
        </tbody>
        <!-- menampilkan data table pendaftar -->

      <?php endforeach; ?>

    </table>

    </div>
 </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>