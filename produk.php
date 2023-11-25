<?php
session_start()

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
            <!-- memanggil class col-md-9 artinya memenuhi 9 column. Text-justify artinya agar textnya rata kanan kiri -->
            <?php if (isset($_SESSION["admin"])) { ?>
                <a href="addProduk.php"><button class="btn btn-success col-2 m-sm-3">Tambah Produk</button></a> 
            <?php } ?>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID</th>
      <th scope="col">Nama produk</th>
      <th scope="col">Warna</th>
      <th scope="col">Harga</th>

      <?php if (isset($_SESSION['admin'])) { ?>
          <th scope="col">Action</th>
      <?php } ?>
      
    </tr>
  </thead>
  <tbody class="table-group-divider">
    
   <tr>


            <?php
            include 'function.php'; //melakukan include file function.php
            $no = 0;
            $data = showProduct(); //memanggil function showProduct() dari file functions.php
            while ($d = mysqli_fetch_array($data)) {
                $no++;
                ?>
                    <tr>
                        <td><?php echo $no; ?></td> 
                        <td><?php echo $d['id']; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['warna']; ?></td>
                        <td><?php echo $d['harga']; ?></td>
                        <?php if (isset($_SESSION['login'])) { ?>
                        <td><a href="order.php?id=<?=$d['id']; ?>"><input type="button" class="btn btn-success col-4" value="Beli"></a></td>
                        <?php }?>

                        <!-- action edit dan hapus -->
                        <?php if (isset($_SESSION['admin'])) { ?>
                            <td><a href="updateProduk.php?id=<?= $d["id"]; ?>"><button class="btn btn-success col-3">Edit</button></a> 
                            <a href="deleteProduk.php?id=<?= $d["id"]; ?>" onclick="return confirm('Produk dengan id-<?= $d['id'] ?> yakin dihapus ?')"><button class="btn btn-danger col-4" >Hapus</button></a> </td>
                        <?php } ?>
                    </tr>
                    <?php
            }
            ?>
          
        </tr>
    


  </tbody>
</table>
  
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