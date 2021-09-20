<html>
	<head></head>
<body>

<?php

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "rental";
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
	
	if(!empty($_POST))
		{	
			$unm=$_POST['userName'];
			
			$q="select * from register where userName='$unm'";
			
			$res=mysqli_query($conn,$q) or die("wrong query");
			
			$row=mysqli_fetch_assoc($res);
			
			if(!empty($row))
			{
				if($_POST['password']==$row['password'])
				{
					$unm=$row['userName'];			
					{
						header("location:cars.html");
					}
				}
				
				else
				{
					echo "<script>
				alert('Invalid user or password....');
				document.location='login.html';
				</script>";
				}
			}
			else
			{
				
				echo "<script>
				alert('Incorrect user or Password ....');
				document.location='login.html';
				</script>";
				
			}
		}
	
			
?>
</body>
</html>
