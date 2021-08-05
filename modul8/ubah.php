<?php 

require 'functions.php';

$id = $_GET["id"];
$mhs = query("SELECT * FROM siswa where id = $id ")[0];
// cek tombol submit sdh ditekan atau belum
if(isset($_POST["submit"])) {
	// cek apakah data berhasil di tambahkan atau tidak
	if (ubah($_POST)>0){
		echo "
				<script>
					alert('data berhasil diubah!');
					document.location.href = 'Pendaftar.php';
				</script>
		";
	} else {
		echo "
		<script>
					alert('data gagal diubah!');
					document.location.href = 'Pendaftar.php';
				</script>
		";
	}


}
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Materi 8</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-6">
            <div class="card mt-5">
            <div class="card-body">
               <form action="" method="post">
              
               <input type="hidden" name="id" value="<?php echo $mhs->id; ?>">
               <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" value="<?php echo $mhs->nama ?>" name="nama" class="form-control" id="nama">
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" value="<?php echo $mhs->alamat ?>" name="alamat" class="form-control" id="alamat">
                </div>

                <legend class="col-form-label">Jenis Kelamin</legend>
               
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="JenisKelamin" id="gridRadios1" value="l" <?php if($mhs->JenisKelamin == "l") { echo "checked";} ?>>
                    <label class="form-check-label" for="gridRadios1">
                        Laki-laki
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="JenisKelamin" id="gridRadios2" value="p" <?php if($mhs->JenisKelamin == "p") { echo "checked";} ?>>
                    <label class="form-check-label" for="gridRadios2">
                        Perempuan
                    </label>
                    </div>


                    <div class="form-group mt-3">
                    <label for="exampleFormControlSelect1" >Example select</label>
                    <select class="form-control" name="agama" id="exampleFormControlSelect1">
                    <option value="islam" <?php if($mhs->agama == "islam"){ echo "selected";} ?>>Islam</option>
                    <option value="kristen" <?php if($mhs->agama == "kristen"){ echo "selected";} ?>>Kristen</option>
                    <option value="hindu" <?php if($mhs->agama == "hindu"){ echo "selected";} ?>>Hindu</option>
                    <option value="budha" <?php if($mhs->agama == "budha"){ echo "selected";} ?>>Budha</option>
                    <option value="konghucu" <?php if($mhs->agama == "konghucu"){ echo "selected";} ?>>Konghucu</option>
                    </select>
                </div>

                <div class="form-group mt-3">
                    <label for="nama">Sekolah Asal</label>
                    <input type="text" value="<?php echo $mhs->sekolah ?>" name="sekolah" class="form-control" id="nama" placeholder="nama sekolah">
                </div>
                
                <button class="btn btn-primary" name="submit" type="submit">Tambah</button>

               </form>
            </div>
            </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>