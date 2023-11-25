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
    <!-- class navbar artinya membuat navbar yang disediakan oleh bootstrap -->
    <?php include 'nav.php'; ?>


    <!-- memanggil class container dari bootstraps -->
    <div class="containerr">

        <?php include 'sidebar.php'; ?>



        <!-- membuat content -->
        <div class="content col-md-9 text-justify">
            <!-- memanggil class col-md-9 artinya memenuhi 9 column. Text-justify artinya agar textnya rata kanan kiri -->

            <div class="bc-profile">
                <br> <br> <br><br>
                <div class="profil">
                    <div class="profil-text">
                        <h3>Sejarah Delear Honda Mas Agus</h3>
                        <br>
                        <p>
                            Sejarah berdirinya "Delear Honda Mas Agus" bermula dari pada tahun 2003. Pada tahun itu mas Agus ingin
                            berkontribusi pada perkembangan industri otomotif di Klungkung. Ia melihat potensi
                            pertumbuhan ekonomi dan minat masyarakat terhadap mobil yang semakin tinggi. Agus memiliki
                            visi untuk memberikan layanan terbaik kepada para pelanggan, tidak hanya dalam hal
                            penjualan, tetapi juga pelayanan purna jual yang unggul.
                        </p>
                        <p>
                            Pada awalnya, Agus memulai usahanya dengan hanya beberapa pegawai dan ruang pamer yang
                            sederhana. Namun, dengan dedikasi dan kerja kerasnya, ia berhasil menjalin kerja sama yang
                            kuat dengan distributor resmi Honda di wilayah tersebut. Kesepakatan ini memungkinkan
                            "Dealer Honda Mas Agus" menjadi dealer resmi Honda, menjual berbagai model mobil Honda yang
                            populer.
                        </p>
                        <p>
                            Dengan mengutamakan pelayanan pelanggan, "Delear Honda Mas Agus" segera dikenal sebagai
                            dealer yang ramah dan profesional. Mereka menempatkan kualitas produk dan kepuasan pelanggan
                            sebagai prioritas utama. Agus juga sangat peduli terhadap lingkungan, sehingga perusahaan
                            ini aktif dalam program-program ramah lingkungan, seperti penanaman pohon, kampanye
                            penggunaan kendaraan ramah lingkungan, dan sebagainya.
                        </p>

                        <p>
                            Dalam beberapa tahun, "Delear Honda Mas Agus" berhasil tumbuh pesat. Mereka meraih banyak
                            penghargaan dari Honda dan komunitas otomotif lokal atas dedikasi mereka dalam melayani
                            pelanggan. Perusahaan ini pun terus berinovasi dengan teknologi penjualan yang canggih dan
                            program loyalitas pelanggan yang menarik.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- membuat footer -->
    <?php include 'footer.php'; ?>

    <!-- text-center artinya textnya agar ditengah. mt-5 artinya margin top 5. bg-dark artinya background warna hitam. text-light artinya text warnya putih -->


    <!-- memanggil sript dari bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>