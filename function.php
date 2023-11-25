<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$koneksi = mysqli_connect("localhost","root","", "dealer_honda" );


function login($data){
    global $koneksi;
    //antisipasi script 
    $username =htmlspecialchars($_POST["username"]); 
    $password =htmlspecialchars($_POST["password"]) ;

    $user = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' ");
    if (mysqli_num_rows($user) == 1){

        //cek password 
        $row = mysqli_fetch_assoc ($user);
        if (password_verify($password, $row["password"])){
            $nama = $row["nama"];

			if($row["user"] == 'admin'){
				$_SESSION['admin'] = true;
				return $nama;
			}
            $_SESSION['login'] = true;
        
            // var_dump("oke");
            return $nama;  
        }

    }
    return 0;

}



function addUser($data) //function untuk menambahkan data siswa ke dbs

{
	global $koneksi; //agar $conn dapat ditangkap atau dikenali pada function 

	$nama = htmlspecialchars($_POST["nama"]);
	$username = htmlspecialchars($_POST["username"]);
	$password = htmlspecialchars($_POST["password"]);
	$hash = password_hash($password, PASSWORD_DEFAULT);

	$find = mysqli_query($koneksi ,"SELECT * FROM user WHERE username = '$username' ");

    if (mysqli_num_rows($find) == 1){

		return 0;

    }
   
	

	$qri = "INSERT INTO user (nama, username, password)values ('$nama', '$username',  '$hash')";
	mysqli_query($koneksi, $qri);
	return mysqli_affected_rows($koneksi);  //mengambalikan jumlah baris
	

	

}

function addProduct($data){

    global $koneksi; //agar $conn dapat ditangkap atau dikenali pada function 

	$nama = htmlspecialchars($_POST["nama"]);
	$warna = htmlspecialchars($_POST["warna"]);
	$harga = htmlspecialchars($_POST["harga"]);


	//query insert data 
	$qri = "INSERT INTO product (nama, warna, harga)values ('$nama', '$warna', '$harga')";
	mysqli_query($koneksi, $qri);
	return mysqli_affected_rows($koneksi);  //mengambalikan jumlah baris

}


function showProduct(){
    global $koneksi;
    $result = mysqli_query($koneksi, "SELECT * from product");
	
    return $result;
}

function deleteProduct($id){
   
        global $koneksi;
        mysqli_query($koneksi, "DELETE FROM product WHERE id = $id" ); //perintah untuk menjalankan query menghapus data berdasarkan ID
        return mysqli_affected_rows($koneksi); //mengambalikan jumlah baris
    
}

function showById($query){
	global $koneksi; //agar $conn dapat ditangkap atau dikenali pada function 
	$result = mysqli_query($koneksi, $query);
	
	$rows = []; //membuat array 
	while ($row = mysqli_fetch_assoc($result)) //melakukan perulangan while
	{
		$rows[] = $row;  // row akan disimpan dalam array rows
	}
 return $rows;
 
}

function updateProduk($query){

	global $koneksi; 

	//proses deklarasi
	$id = htmlspecialchars($_POST["id"]);
	$nama = htmlspecialchars($_POST["nama"]);
	$warna = htmlspecialchars($_POST["warna"]);
	$harga = htmlspecialchars($_POST["harga"]);



	$update = "UPDATE product SET  
	nama ='$nama', 
	warna  ='$warna', 
	harga = '$harga' WHERE id = $id "; //kueri untuk mengupdat data berdasarkan ID-nya


	mysqli_query($koneksi, $update); //perintah untuk menjalankan query 
	return mysqli_affected_rows($koneksi); //mengambalikan jumlah baris
}

?>