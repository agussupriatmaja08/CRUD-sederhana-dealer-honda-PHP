<?php
session_start();
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
    } else {

        echo "<script> 
                alert ('Data gagal diubah!');
    
                </script>";
    }

}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delear Honda Mas Agus</title>
    <link rel="stylesheet" href="style.css">
    <!-- memanggil bootstraps -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <!-- Membuat header -->
    <header class="text-center">
        <h1>Delear Honda Mas Agus</h1>
    </header>
    <?php include 'nav.php'; ?>
    <div class="containerr">
        <?php include 'sidebar.php'; ?>

        <!-- membuat content -->
        <div class="content col-md-9 text-justify">
            <div class="order">
            <form action="#">
            <table>
                <tr>
                    <td><label for="nama-produk">Nama Produk</label></td>
                    <td><input type="text" value="<?php echo $produk['nama'] ?>" disabled></td>
                  
                </tr>
                <tr>
                    <td><label for="warna-produk">Warna Produk</label></td>
                    <td><input type="text" value="<?php echo $produk['warna'] ?>" disabled></td>
                </tr>
                <tr>
                     <td><label for="harga-produk">Harga</label></td>
                    <td><input type="text" value="<?php echo $produk['harga'] ?>" disabled></td>
                </tr>
                <tr>
                    <td><label for="metode-pembayaran">Metode Pembayaran</label></td>
                    <td>
               
                     <select class="form-control" name="metode-pembayaran" id="metode-pembayaran" onchange="noRek()" required>

                    <option value=""></option>
                    <option value="COD">COD</option>
                    <option value="E-Banking">E-Banking</option>
                </select>
                    
                    </td>
                </tr>
                <tr>
                <td>No Rekening</td>
                 <td><input type="text" id="no-rek" disabled></td>
                   
                    
                </tr>
                <tr>
                    <td>Alamat pengiriman</td>
                    <td><input type="text"required></td>
                </tr>
                
                <tr><td><a href="berhasil.php"><input type="button" value="Beli" onclick="return confirm('Apakah anda yakin untuk membeli produk -<?= $produk['nama'] ?>?')" class="btn btn-success col-4"></a></td></tr>

           
            </table>
            </form>
            <tr><td><a href="produk.php"><input type="button" class="btn btn-danger" value="Kembali"></a> </td></tr>

            </div>
               
  
        </div>

    </div>
    
    <!-- membuat footer -->
    <?php include 'footer.php'; ?>

    

    <!-- memanggil sript dari bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script>
    function noRek() {
        let metodePembayaran =document.querySelector("#metode-pembayaran").value;
        let noRek = document.querySelector("#no-rek");
        if(metodePembayaran == "E-Banking"){
            noRek.disabled = false;
        }else{
            noRek.disabled = true;

        }
        
    }
   
    </script>
</body>

</html>
