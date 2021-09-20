<html>
<head>
</head>
<body>
<?php

	$userName = $_REQUEST['userName'];
	$firstName = $_REQUEST['firstName'];
 	$lastName = $_REQUEST['lastName'];
 	$password = $_REQUEST['password'];
 	$confirm_password = $_REQUEST['confirm_password'];
	 $userEmail = $_REQUEST['userEmail'];
     $gender = $_REQUEST['gender'];

	$link=new mysqli("localhost","root","","rental");
	$link->query("insert into register values('$userName','$firstName','$lastName','$password','$confirm_password','$userEmail','$gender')");
	echo "Success";
	header("location:login.html");
	mysqli_close($link);

	
?>
</body>
</html>