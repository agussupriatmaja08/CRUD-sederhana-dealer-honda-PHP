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


    <?php include 'nav.php'; ?>


    <!-- memanggil class container dari bootstraps -->
    <div class="containerr">
       
        <?php include 'sidebar.php'; ?>



        <!-- membuat content -->
        <div class="content col-md-9 text-justify">
            <!-- memanggil class col-md-9 artinya memenuhi 9 column. Text-justify artinya agar textnya rata kanan kiri -->
         
                <div class="bc-profile">
                    <br> <br> 
                    <center>
                <div class="profil">
                   <div class="profil-text">
                    <h3>Visi</h3>
                    <br>
                    <p>Menjadi mitra distribusi motor merek Honda yang terkemuka dan diakui secara internasional, memberikan akses mudah dan luas kepada konsumen untuk memiliki dan menikmati produk berkualitas tinggi dengan layanan distribusi yang efisien dan handal.</p>
                    <br>
                    <h3>Misi</h3>
                    <ol>
                     <li>Menjamin ketersediaan produk-produk Honda yang berkualitas tinggi di seluruh titik distribusi, serta memberikan layanan yang unggul untuk meningkatkan kepuasan pelanggan.</li>
                     <li>Memperluas jaringan distribusi kami untuk mencakup area yang lebih luas, termasuk pasar nasional dan internasional, sehingga lebih banyak orang dapat merasakan manfaat produk Honda.</li>
                     <li>Menjunjung tinggi prinsip ketepatan waktu dalam pengiriman dan distribusi, serta memastikan keandalan dalam menjalankan seluruh proses distribusi.</li>
                     <li>Mengintegrasikan prinsip-prinsip keselamatan dalam distribusi dan pengiriman, serta berkomitmen untuk mengurangi dampak lingkungan melalui praktik distribusi yang ramah lingkungan.</li>
                    </ol>
                    </div>
                   </div>
                   </center>
 
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