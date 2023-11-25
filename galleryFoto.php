<?php session_start()

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
        <img src="img/033930000_1639360949-logo-motor-honda-c0af44.jpg" alt="">
        <h1>Delear Honda Mas Agus</h1>
    </header>


    <!-- membuat navigasi  -->
    <?php include 'nav.php'; ?>


    <div class="containerr">
       
        <?php include 'sidebar.php'; ?>



        <!-- membuat content -->
        <div class="content col-md-9 text-justify">
         
        <div class="gallery">
        <div class="item"><img src="img/PRODUK_VARIAN-WARNA_20_02-02-2023_63db340dbfdc7.jpg"></div>
        <div class="item"><img src="img/1308737589p.jpg"></div>
        <div class="item"><img src="img/11-Honda-CL500-2023-Mat-Gunpowder-Black-Metallic.jpg"></div>
        <div class="item"><img src="img/download.jpeg" ></div>
        <div class="item"><img src="img/4.-Honda-Vario-125-300x300.jpg" ></div>
        <div class="item"><img src="img/BERITA_1531123391_8d2699afcf378599e1ad306ca9d88df6.jpg"></div>
        </div>
  
        </div>

    </div>
    
    <!-- membuat footer -->
    <?php include 'footer.php'; ?>

    

    <!-- memanggil sript dari bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>