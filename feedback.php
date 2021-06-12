<?php
include "connection.php";
include "navbar.php";
?>
<!doctype html>
<html>
<head>
<title>Feedback</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,inital-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>   
<style type="text/css">
body
{
background-image: url("images/feedback.jpg");
background-repeat:no-repeat;
  

}
.wrapper
{
	padding:18px;
	margin:20px auto;
	width:1000px;
	height:600px;
	background-color:black;
	opacity:.8;
	color:white;
}
.form-control{
	height:70px;
	width:60%;
}
.scroll{
	width:100%;
	height:300px;
	overflow:auto;
}
</style>


</head>
<body>
<div class="wrapper">
<h1>If you have a suggestion or question please comment below.</h1>
<form style="" action="" method="post">
<input class ="form-control" type="text "name="comment" placeholder="write something..."><br>

<input class="btn btn-default" type="submit" name="submit" value="Comment" style="width:100px; height:35px;">

</form>
<br><br>

<div class="scroll">
<?php
if(isset($_POST['submit']))
{
	$sql="INSERT INTO `comments` VALUES ('','$_POST[comment]');";
	if(mysqli_query($db,$sql))
	{
		$q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
		$res=mysqli_query($db,$q);
		echo "<table class='table table-bordered'>";
		while($row=mysqli_fetch_assoc($res))
		{
			echo "<tr>";
			echo "<td>" ; echo $row['comment']; echo"</td>";
			echo "</tr>";
			
		}
		echo "</table>";
	}
	
		
}
else{
	$q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
		$res=mysqli_query($db,$q);
		echo "<table class='table table-bordered'>";
		while($row=mysqli_fetch_assoc($res))
		{
			echo "<tr>";
			echo "<td>" ; echo $row['comment']; echo"</td>";
			echo "</tr>";
			
		}
		echo "</table>";
	
	
}


?>

</div>
</div>
</div>
</body>
</html>