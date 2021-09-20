<html>
<head>
</head>
<body>
<?php

	$firstName = $_REQUEST['firstName'];
	$lastName = $_REQUEST['lastName'];
 	$number = $_REQUEST['number'];
 	$comments = $_REQUEST['comments'];
	
	$link=new mysqli("localhost","root","","rental");
	$link->query("insert into feedback values('$firstName','$lastName','$number','$comments')");
	

	
	header("location:cars.html");
	
	
	mysqli_close($link);
	
?>
</body>
</html>