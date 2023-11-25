<?php
require 'function.php'; //melakukan require file function.php

$id = $_GET["id"]; //ambil data di url


$produk = showById("SELECT * FROM product WHERE id = $id")[0];


if (isset($_POST["submit"])) {

    if (updateProduk($_POST) > 0) {

        echo "<script> 
                alert ('Data berhasil diubah!');
                document.location.href = 'produk.php';
    
                </script> 
    
            ";
    }

}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .container {
            margin-top: 30px;
            width: 40%;
        }
    </style>
<link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h3>Edit data produk</h3>

        <form method="post">
            <div class="mb-3">

                <input type="hidden" class="form-control" id="id" name="id" value="<?= $produk["id"]; ?>">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label"> <strong>Nama</strong> </label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $produk["nama"]; ?>" required>
            </div>
            <div class="mb-3">
                <label for="warna" class="form-label"><strong> Warna</strong> </label>
                <input type="text" class="form-control" id="warna" name="warna" value="<?= $produk["warna"]; ?>"
                    required>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label"><strong> Harga</strong> </label>
                <input type="number" class="form-control" id="harga" name="harga" value="<?= $produk["harga"]; ?>"
                    required>
            </div>
     
           
            <button type="submit" name="submit" class="btn btn-success">Simpan</button>
        </form>
        <br>
    <a href="produk.php"> <button class="btn btn-danger">Kembali</button></a>

    </div>

</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>

</html>