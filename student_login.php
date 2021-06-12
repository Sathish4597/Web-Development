
<?php  
include "connection.php";
include "navbar.php";

?>



<!doctype html>
<html>
<head>
<title>Student Login Page</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,inital-scale=1">

<!-------------
<!-- Latest compiled and minified CSS --
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library --
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript --
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>   
 

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

li a:hover{
	background-color:tomato;
}


section
{
	margin-top:-20px;
}

</style> -------------------------------->

</head>
<body>

<!---if you dont want the booststrap delete the nav and uncomment below header section -----
<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand active">ONLINE LIBRARY MANAGEMENT SYSTEM</a>
</div>
<ul class="nav navbar-nav">
<li><a href="index.php">HOME</a></li>
<li><a href="books.php">BOOKS</a></li>
<li><a href="feedback.php">FEEDBACK</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="student_login.php"><span class="glyphicon glyphicon-log-in "> LOGIN </span></a></li>

<li><a href="student_login.php"><span class="glyphicon glyphicon-log-out"> LOGOUT </span></a></li> 


<li><a href="registration.php"><span class="glyphicon glyphicon-user">Sign Up</span></a></li>

</ul>

</div>
</nav> ----------------



<header style="height:100px;">
<div class="logo">

<h1 style="color:white; font-size:30px;word-spacing:10px;Line-height:50px;margin-top:30px;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
</div>

<nav >
<ul>
<li><a href="index.php">HOME</a></li>
<li><a href="books.php">BOOKS</a></li>
<li><a href="student_login.php">STUDENT-LOGIN</a></li>
<li><a href="registration.php">REGISTRATION</a></li>
<li><a href="feedback.php">FEEDBACK</a></li>
</ul>
</nav>


</header>  

--------------------------------------------------------------------------------------------------------------------->
<section>
<div class="log_img">
<br><br>
<div class="box1">

<h1 style="text-align:center; font-size:35px;font-family:Lucida Console;">Library Management System</h1>
<h1 style="text-align:center;font-size:25px;">User Login Form</h1><br>
<form name="login" action="" method="post">

<div class="login">
<input class="form-control" type="text" name="username" placeholder="Username" required=""><br><br>
<input class="form-control" type="password" name="password" placeholder="password" required=""><br>
<input class="btn btn-default" type="Submit" name="submit" value="Login" style="color:black;  width:70px; height:30px;">
</div>

<p style="color:white; padding-left:15px;">
<br><br>
<a style="color:white;" href="">Forgot password?</a>&nbsp &nbsp &nbsp &nbsp &nbsp

New to this website ?<a style ="color:white;" href="registration.php">Sign Up</a>
</form>
</p>
</div>
</div>

</section>

<?php
if(isset ($_POST['submit']))
{
	$count=0;
	$res=mysqli_query($db,"SELECT * FROM student_registration WHERE username='$_POST[username]' && password='$_POST[password]';");
	$count=mysqli_num_rows($res);
	
	if($count==0)
	{
		?>
		<!--
		<script type="text/javascript">
		alert("The username and passpord doesn't match.");
		</script>
		-->
		<div class="alert alert-warning" style="width:700px;margin-Left:300px;background-color:#2d0606;color:#ea1010;">
		<strong>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  The username and password doesn't match</strong>
		</div>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		window.location="index.php"
		</script>
		<?php
	}
}
?>
</body>

</html>