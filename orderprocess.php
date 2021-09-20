<html>
<head>
</head>
<body>
<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "rental";
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

	$carname = $_REQUEST['carname'];
	$fname = $_REQUEST['fname'];
 	$address = $_REQUEST['address'];
 	$date = $_REQUEST['date'];
 	$date2 = $_REQUEST['date2'];
	
	 $link=new mysqli("localhost","root","","rental");
	 $link->query("insert into order00 values('$carname','$fname','$address','$date','$date2')");
	
	echo'<script type="text/javascript">';
	echo "alert('success')";
	echo '</script>';
	header("location:cars.html");
	mysqli_close($link);
	
	
?>
</body>
</html>