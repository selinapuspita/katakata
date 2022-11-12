<?php 

$conn = mysqli_connect("localhost", "root", "", "projectiseng");

// function query($query) {
// 	global $conn;
//     $result = mysqli_query($conn, $query);
//     $rows = [];
//     while ($row = mysqli_fetch_assoc($result)) {
//     	$rows[] = $row;
//     }
//     return $rows;
// }

function tambah($data) {
	global $conn;
	// $nama = htmlspecialchars($data ["nama"]);
	$reasons = htmlspecialchars($data["reasons"]);

  $query = "INSERT INTO yes	
           VALUES 
           ('$id','$reasons')";
    mysqli_query($conn, $query);
}

function kurang($data) {
	global $conn;
	// $nama = htmlspecialchars($data ["nama"]);
	$reasons = htmlspecialchars($data["reasons"]);

  $query = "INSERT INTO no	
           VALUES 
           ('$id','$reasons')";
    mysqli_query($conn, $query);
}

function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]); 

    // cek username udh ada apa blom
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username='$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script> 
                 alert ('username sudah terdaftar!')
              </script>";
    return false;
    }

    //cek konfirmasi password
    if ($password !== $password2) {
        echo "<script> 
                 alert ('konfirmasi password tidak sesuai!');
             </script>";
             return false;
    }  
  //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);


  //tambahkan user baru ke database
   mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");
   return mysqli_affected_rows($conn);

}

 ?>