<?php 
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
     <div class="row mt-5">
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
            <td><?php echo $dt->nama ?></td>
            <td><?php echo $dt->alamat ?></td>
            <td><?php 
              if($dt->JenisKelamin == "l")
              {
                echo "Laki-laki";
              }elseif($dt->JenisKelamin == "p")
              {
                echo "Perempuan";
              }else{
                echo "";
              }
          
            ?></td>
            <a href=""></a>
            <td><?php echo $dt->agama ?></td>
            <td><?php echo $dt->sekolah ?></td>
            <td>
            <a href="ubah.php?id=<?php echo $dt->id ?>">Edit</a>
            <a href="hapus.php?id=<?php echo $dt->id ?>">Delete</a>
            </td>
            </tr>
        </tbody>
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