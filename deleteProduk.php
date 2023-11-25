<?php 

require 'function.php'; //melakukan require file functions.php

$id = $_GET["id"]; //mengambil id dari url



if( deleteProduct($id) > 0) //kondisi apabila jumlah baris lebih besar dari 0

{ 
	

	echo "<script> 
			alert ('Data berhasil dihapus!');
			document.location.href = 'produk.php';

			</script> 

		";
}else {

	echo "<script> 
			alert ('Data gagal dihapus!');

			</script>";
}






 ?>

 
