<!doctype html>
<html>
<head>
<title>LIBRARY MANAGEMENT SYSTEM</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta characterset="utf-8">
<meta name="viewport" content="width=device-width,inital-scale=1">

<!-- why this style i put here means i commented this style in style.css because i joined bootstrap in student-login-->
<style type="text/css">
nav{
	
	float:right;
	word-spacing:30px;
	padding:20px;
}
nav li{
	
	display:inline-block;
	line-height:80px;
}
</style>

</head>
<body>
<div class="wrapper">

<header>
<div class="logo">
<img src="images/logo.jpeg"> 

<h1 style="color:white;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
</div>

<nav>
<ul>
<li><a href="index.php">HOME</a></li>
<li><a href="books.php">BOOKS</a></li>
<li><a href="student_login.php">STUDENT-LOGIN</a></li>
<li><a href="registration.php">REGISTRATION</a></li>
<li><a href="feedback.php">FEEDBACK</a></li>
</ul>
</nav>

</header>

<section>
<div class="sec_img">



<br><br><br>

<div class="box">
<br><br><br><br>
<h1 style="text-align:center; font-size:35px;">Welcome to library </h1><br><br>
<h1 style="text-align:center;font-size:25px;">Opens at:09:00</h1><br>
<h1 style="text-align:center; font-size:25px;">Closes at:15:00</h1><br>
</div>
</div>

</section>
<!--
<footer>
<p style="color:white;text-align:center;">
<br>
Email:&nbsponline.library@gmail.com <br><br>
Mobile:&nbsp+919150466211 

</p>

</footer> -->

<?php
include "footer.php";


?>

</div>
</body>






</html>