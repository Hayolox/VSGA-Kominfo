<?php 

require 'functions.php';

// cek tombol submit sdh ditekan atau belum
if(isset($_POST["submit"])) {
	// cek apakah data berhasil di tambahkan atau tidak
	if (tambah($_POST)>0){
		echo "
				<script>
					alert('data berhasil ditambahkan!');
					document.location.href = 'DaftarBaru.php';
				</script>
		";
	} else {
		echo "
		<script>
					alert('data gagal ditambahkan!');
					document.location.href = 'DaftarBaru.php';
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

               <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama">
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat">
                </div>

                <legend class="col-form-label">Jenis Kelamin</legend>
               
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="JenisKelamin" id="gridRadios1" value="l" checked>
                    <label class="form-check-label" for="gridRadios1">
                        Laki-laki
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="JenisKelamin" id="gridRadios2" value="p">
                    <label class="form-check-label" for="gridRadios2">
                        Perempuan
                    </label>
                    </div>


                    <div class="form-group mt-3">
                    <label for="exampleFormControlSelect1" >Example select</label>
                    <select class="form-control" name="agama" id="exampleFormControlSelect1">
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="hindu">Hindu</option>
                    <option value="budha">Budha</option>
                    <option value="konghucu">Konghucu</option>
                    </select>
                </div>

                <div class="form-group mt-3">
                    <label for="nama">Sekolah Asal</label>
                    <input type="text" name="sekolah" class="form-control" id="nama" placeholder="nama sekolah">
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