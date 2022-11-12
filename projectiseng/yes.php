<?php 
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

if (isset ($_POST["submit"])) {

if (tambah ($_POST) >= 0 ) {
	echo "
	       <script>
	       alert ('Thank you!');
	       document.location.href = 'index.php';
           </script>
	      ";
} else {
	echo "
          <script>
	       alert ('oops, fill the data!');
	       document.location.href = 'iseng.php';
           </script>
	    ";
}	
}

?>

<style>
	body {
	background-image: url(img/tiedye.jpg);
	/*text-align: center;*/

}
    .gambar {
    	background-image: url(img/giphy.png);
    	height: 200px;
    	width: 480px;
	background-position: 0-20px;
	border-top: 5px solid lightsalmon;
	border-bottom: 5px solid lightsalmon;
    }


</style>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>YOU CHOOSE YES!</title>
</head>
<body>
<h1>YOU CHOOSE YES!</h1>
<div class="gambar"></div>
<form action="" method="post">
<ul>
	<!-- <li>
		<label for="nama">Your Name ? </label>
		<input type="text" name="nama" id="nama | required">
	</li> -->
	<li>
		<label for="reasons">What's the reason ? </label>
		<input type="text" name="reasons" id="reasons" | required>
	</li>
	<li>
		<button type="submit" name="submit">Send This</button>
	</li>
</ul>
</form>

</body>
</html>