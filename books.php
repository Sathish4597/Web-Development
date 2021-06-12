<?php
include "connection.php";
include "navbar.php";

?>
<!doctype html>
<html>
<title>Books</title>
<head>

</head>
<body>
<h2><center>List of Books</center></h2>
<?php
$res=mysqli_query($db,"SELECT * FROM `books`;");
echo "<table class='table table-bordered table-hover'>";
echo "<tr style='background-color:white;'>";
//Table header
echo "<th>"; echo "ID"  ;        echo "</th>";
echo "<th>"; echo "BOOK-NAME";       echo "</th>";
echo "<th>"; echo "AUTHORS NAME";    echo "</th>";
echo "<th>"; echo "EDITION";     echo "</th>";
echo "<th>"; echo "STATUS"  ;    echo "</th>";
echo "<th>"; echo "QUANTITY" ;   echo "</th>";
echo "<th>"; echo "DEPARTMENT";  echo "</th>";
echo "</tr>";
while($row=mysqli_fetch_assoc($res))
{
	echo "<tr>";
	echo "<td>"; echo $row['id']; echo"</td>";
	echo "<td>"; echo $row['name']; echo"</td>";
	echo "<td>"; echo $row['authors']; echo"</td>";
	echo "<td>"; echo $row['edition']; echo"</td>";
	echo "<td>"; echo $row['status']; echo"</td>";
	echo "<td>"; echo $row['quantity']; echo"</td>";
	echo "<td>"; echo $row['department']; echo"</td>";
	
	echo "</tr>";
}
?>

</body>

</html>