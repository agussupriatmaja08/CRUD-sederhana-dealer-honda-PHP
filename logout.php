<?php
session_start(); 

  $_SESSION = []; 
  session_unset();
  session_destroy();
  echo "<script> 
  alert('Berhasil logout');
  document.location.href = 'index.php'; 
  
  </script>";


?>