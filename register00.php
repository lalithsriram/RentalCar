<html>
<head>
<title>PHP User Registration Form</title>
<link rel="stylesheet" type="text/css" href="register00.css">
<!-- Javascript validation for user inputs -->
<script type="text/javascript">
 
function validate()
{
var password = document.frmRegistration.password.value;
var confirmpassword = document.frmRegistration.confirm_password.value; 
if (password==null || password=="")
{
  alert("password can't be blank");
  return false;
}
else if (confirmpassword==null || confirmpassword=="")
{
  alert("confirmpassword can't be blank");
  return false;
}
if( password!=confirmpassword)
{
	alert("password should be same");
	return false;
}
}
</script>

</head>
<body>
<form name="frmRegistration" method="post" action="process.php" onsubmit="return validate();">
<table border="0" width="500" align="center" class="demo-table">
<tr>
<td>User Name</td>
<td><input type="text" class="demoInputBox" name="userName" value="" required></td>
</tr>
<tr>
<td>First Name</td>
<td><input type="text" class="demoInputBox" name="firstName" value=""required></td>
</tr>
<tr>
<td>Last Name</td>
<td><input type="text" class="demoInputBox" name="lastName" value=""required></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" class="demoInputBox" name="password" value=""></td>
</tr>
<tr>
<td>Confirm Password</td>
<td><input type="password" class="demoInputBox" name="confirm_password" value=""></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" class="demoInputBox" name="userEmail" value=""required></td>
</tr>
<tr>
<td>Gender</td>
<td><input type="radio" name="gender" value="Male" required> Male
<input type="radio" name="gender" value="Female" required> Female
</td>
</tr>
<tr>
<td colspan=2>
<input type="checkbox" name="terms"required> I accept Terms and Conditions 
<input type="submit" name="submit" value="Register" class="btnRegister"></td>
</tr>
</table>
</form>
</body></html>