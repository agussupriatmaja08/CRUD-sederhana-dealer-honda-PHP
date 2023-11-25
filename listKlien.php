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
   
    <div class="navBar"> <?php include 'nav.php'; ?> </div>



    <div class="containerr">

        <?php include 'sidebar.php'; ?>



        <!-- membuat content -->
        <div class="col-md-9 text-justify">
            <!-- memanggil class col-md-9 artinya memenuhi 9 column. Text-justify artinya agar textnya rata kanan kiri -->


            <header>
                <h1>Klien Kami</h1>
            </header>
            <section class="client-list">
        <div class="client">
            <img src="imgKlien/download (1).jpeg" alt="Anton">
            <h3>Anton</h3>
            <p>Seorang profesional dalam industri teknologi.</p>
        </div>
        <div class="client">
            <img src="imgKlien/3be3835a9189c3f7dbe9098469658139.jpg" alt="Adit">
            <h3>Adit</h3>
            <p>Pengusaha dengan bisnis retail yang sukses.</p>
        </div>
        <div class="client">
            <img src="imgKlien/00ecf4c3c8f111d6dd25763f223fcb8f.jpg" alt="Bangbang">
            <h3>Bangbang</h3>
            <p>Pemilik restoran terkenal di kota.</p>
        </div>
        <div class="client">
            <img src="imgKlien/724f39fad29a060216b3c95fdfe5d987.jpg" alt="Amy Brown">
            <h3>Eka Santoso</h3>
            <p>Guru sekolah dasar yang berdedikasi.</p>
        </div>
        <div class="client">
            <img src="imgKlien/caf0b2deae58566fb55deeaf638c93c1.jpg" alt="Lendang">
            <h3>Lendang</h3>
            <p>Arsitek yang kreatif dan berbakat.</p>
        </div>
        <div class="client">
            <img src="imgKlien/images (1).jpeg" alt="Siti">
            <h3>Siti</h3>
            <p>Penulis buku best-seller internasional.</p>
        </div>
        <div class="client">
            <img src="imgKlien/images.jpeg" alt="Robert Asep">
            <h3>Robert Asep</h3>
            <p>Pengembang perangkat lunak dengan passion tinggi.</p>
        </div>
    </section>
        </div>

    </div>

    <!-- memanggil footer -->
    <?php include 'footer.php'; ?>



    <!-- memanggil sript dari bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>