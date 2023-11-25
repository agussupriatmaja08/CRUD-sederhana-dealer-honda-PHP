

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

    <div class="navBar"> <?php include 'nav.php'; ?> </div>



    <div class="containerr">

        <?php include 'sidebar.php'; ?>



        <!-- membuat content -->
        <div class="col-md-9 text-justify">
            <!-- memanggil class col-md-9 artinya memenuhi 9 column. Text-justify artinya agar textnya rata kanan kiri -->


               <div class="bc-profile">
                    <br> <br> <br><br>
                    <div class="profil">
                   <div class="profil-text">
                 
                    <br>
                    <h3>Informasi Kontak</h3>
                    <br> <br>
            
                    <p>Alamat: Jl. Raya Sulang, Kec. Dawan, Kab. Klungkung, Bali</p>
                    <p>Email: guarinnn92726@gmail.com</p>
                    <p>No Wa : 085158449281</p>
                    </div>
                   </div>
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