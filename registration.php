
<?php
include "connection.php";
include "navbar.php";
?>




<!doctype html>
<html>
<head>
<title>SIGNIN FORM</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,inital-scale=1">

<!--------------------------------------------------------------------------------------------

<!-- Latest compiled and minified CSS --
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library --
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript --
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

</head>
<body>


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

section{
margin-top:-20px;
}

</style> --------------------------->

</head>
<body>
<!--------------
<!--if you dont want the booststrap delete the nav and uncomment below header section --
<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand active">ONLINE LIBRARY MANAGEMENT SYSTEM</a>
</div>
<ul class="nav navbar-nav">
<li><a href="index.php">HOME</a></li>
<li><a href="books.php">BOOKS</a></li>
<li><a href="feedbak.php">FEEDBACK</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="student_login.php"><span class="glyphicon glyphicon-log-in "> LOGIN </span></a></li>

<li><a href="student_login.php"><span class="glyphicon glyphicon-log-out"> LOGOUT </span></a></li> 


<li><a href="registration.php"><span class="glyphicon glyphicon-user">Sign Up</span></a></li>

</ul>

</div>
</nav> 




<header>
<div class="logo">
<h2 style="color:white;">ONLINE LIBRARY MANAGEMENT SYSTEM</h2>
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

------------------------------------------------------------------------------------------>
<section>
<div class="reg_img">
<br>
<div class="box2">
<h1 style="text-align:center; font-size:35px;font-family:Lucida Console;">Library Management System</h1>
<h1 style="text-align:center;font-size:25px;">User Registration Form</h1>
<form name="Registration" action="" method="post">
<br>
<div class="login">
<input class="form-control" type="text" name="first" placeholder="First Name" required="" ><br>
<input class="form-control" type="text" name="last" placeholder="Last Name" required="" ><br>
<input class="form-control" type="text" name="username" placeholder="Username" required=""><br>
<input class="form-control" type="password" name="password" placeholder="password" required=""><br>
<input class="form-control" type="text" name="roll" placeholder="Roll No" required=""><br>
<input class="form-control" type ="text" name="email" placeholder="Email" required=""><br>
<input class="form-control" type ="text" name="contact" placeholder="Phone No" required=""><br>
<input class="btn btn-default" type="Submit" name="submit" value="Sign Up" style="color:black; width:70px; height:30px;">

</div>
</form>
</div>
</div>
</section>
<?php
if(isset ($_POST['submit']))
{
	$count=0;
	$sql="SELECT username from `student_registration`";
	$res=mysqli_query($db,$sql);
	while($row=mysqli_fetch_assoc($res))
	{
		if($row['username']==$_POST['username'])
		{
			$count=$count+1;
			
		}
		
	}
	if($count==0)
	{
		
	
	mysqli_query($db,"INSERT INTO `student_registration` VALUES('$_POST[first]','$_POST[last]','$_POST[username]','$_POST[password]',
	'$_POST[roll]','$_POST[email]','$_POST[contact]');");
?>
<script type="text/javascript">
alert("Registration Successful");
</script>
<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert("The username already exist.");
		</script>
	<?php
	}
	
}
?>


</body>

</html>