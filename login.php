<?php 

require "function.php";
if(isset($_POST ["submit"])){
  if(login($_POST) != null){
    $nama = login($_POST);
    echo "<script> 
    alert (`Selamat datang! $nama`);
    document.location.href = 'index.php';

    </script> 

  ";
  }else{
    echo "<script> 
    alert ('Username atau password salah!');
 

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
    <link rel="stylesheet" href="style.css">
    <title>Login Form</title>
  </head>
  <body>
    <div class="login-container">
      <h2>Login</h2>
      <form method="post">
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
          
          <button type="submit" name="submit">Login</button>
        </div>
      </form>
      <a href="index.php"><button class="btn btn-danger col-3">Kembali</button></a>
    </div>
  </body>
  </html>
