<?php 
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>i love you</title>
	<link rel="stylesheet" type="text/css" href="iseng.css">
</head>
<body>

<a href="logout.php">Logout</a>
	<div class="container">
   <div class="header">
   	<h1>Hello My Dear</h1>
   </div>

   <div class="paragraf"></div>
<div class="main">
	<p> I know i'll never get a chance to tell you this, but you have no idea how much you cross my mind. Just the thought of you gives me warm feelings and fluttering butterflies in my stomach. <br/> i look forward to talking to you everytime, everyday, every night, every minute if i could. you brigthen up my days when i seem to be down, you provide me comfort with your presence. you're someone i want to keep in my life. you're someone simply amazing. </p>
   <br/>
	<p>so let me ask you this</p> 
   <br/>
</div>

    
   <div class="tautan">
        <h2>Do you love me?</h2>
        <ul>
        <li><a href="yes.php">Yes i do</a></li>
        <li><a href="no.php">Nope</a></li>
        </ul>
   </div>


   <div class="copyright">
   	    <p class="copy">Copyright 2021. SelinaAli</p>
   </div>

  <!--  <script src="iseng.js"></script> -->
</body>
</html>
