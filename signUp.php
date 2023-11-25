



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Sign Up</title>
</head>
<body>
  <div class="login-container">
    <h2>Sign Up</h2>
    <br>
    <br>

    <?php
require 'function.php';

if (isset($_POST["submit"])) {

    if (addUser($_POST) > 0) {
        echo "<script> 
			alert ('Data berhasil disimpan!');
			document.location.href = 'index.php';

			</script> 

		";
    } else {
        echo "<div class='error'>Username telah tersedia! </div>";
    }

}

?>


<br>
<br>
    <form method="post">
        
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" required placeholder="Masukan Nama">
      </div>

      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required placeholder="Masukan Username">
      </div>
      

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required placeholder="Masukan Password">
      </div>
      <br> <br>
      <div class="form-group">
        
        <button type="submit" name="submit">Daftar</button>
      </div>
    </form>
    <a href="index.php"><button class="btn btn-danger col-3">Kembali</button></a>

  </div>
</body>
</html>
