<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    if(isset($_GET['nama']))
    {
        if($_GET['nama']== 'kosong')
        {
        echo "<h4 style='color:red'>Nama Belum Di Masukkan 
        !</h4>"; 
 
        }
    }
    ?>

    <h4>Form</h4>
    <form action="cek.php" method="POST">
    <input type="text" name="nama">
    <button type="submit" value="cek">Submit</button>
    </form>

</body>
</html>