<?php 
//session_start();

//if (!isset($_SESSION["login"])) {
//    header("Location: login.php");
//    exit;
//}

require 'functions.php';

if (isset($_POST["register"]) ) {

	if( registrasi($_POST) > 0 ) {
		echo "<script>
                  alert('user baru berhasil ditambahkan!');
		      </script>";
	} else {
	  echo mysqli_error($conn);
	}

}


 ?>







<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Halaman Registrasi</title>
	<style>
		label {
			display: block;
		}
	</style>
</head>
<body>

<h1>Halaman Registrasi</h1>


<form action="" method="post" multipart/form-data" autocomplete="off">

<ul>
	<li>
		<label for="username">Username :</label>
		<input type="text" name="username" id="username" | required>
	</li>
	<li>
		<label for="password">Password :</label>
		<input type="password" name="password" id="password" | required>
	<li>
		<label for="password2">Konfirmasi password :</label>
		<input type="password" name="password2" id="password2" | required>
	</li>
	<li>
		<button type="submit" name="register">Register!</button>
	</li>
</ul>
</form>

 <style> body {background-image : url(img/tiedye.jpg);}</style>

 <a href="login.php">Login</a>

</body>
</html>