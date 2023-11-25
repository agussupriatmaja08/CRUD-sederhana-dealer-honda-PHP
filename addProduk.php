<?php 
require 'function.php';

if (isset($_POST ["submit"])){
	//ambil data dari tiap elemen form 

	//cek apakah data berhasil disimpan atau tidak 
	if( addProduct($_POST)> 0){
		echo "<script> 
			alert ('Data berhasil disimpan!');
			document.location.href = 'produk.php';

			</script> 

		";
	}else {
		echo "<script> 
			alert ('Data gagal disimpan!');

			</script>"; 	
        }

}

?>


<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemambahan Data Produk</title>

    <style>
        .container{
            width: 40%;
            margin: auto;
        }
    </style>
</head>

<body>
   
<div class="container">
        <h3><strong> Form Pemambahan Data Produk</strong> </h3>
        <br>

        <form method="post">
         
            <div class="mb-3">
                <label for="nama" class="form-label"><strong> Nama</strong> </label>
                <input type="text" class="form-control" id="nama" name="nama"  required>
            </div>
            <div class="mb-3">
                <label for="warna" class="form-label"><strong> Warna</strong> </label>
                <input type="text" class="form-control" id="warna" name="warna"
                    required>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label"><strong> Harga</strong> </label>
                <input type="number" class="form-control" id="harga" name="harga"
                    required>
            </div>
     
           
            <button type="submit" name="submit" class="btn btn-success col-3">Simpan</button>
        </form>
        <br>
        <a href="produk.php"> <button class="btn btn-danger col-3">Kembali</button></a>
    </div>



</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>

</html>