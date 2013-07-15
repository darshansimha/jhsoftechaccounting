<?php

// Inialize session
session_start();

// Check, if user is already login, then jump to secured page
if (isset($_SESSION['username'])) {
        header('Location: account.php');
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
<link rel="stylesheet" href="style1.css" type="text/css" />
</head>

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

<title>Login Page</title>

<script type="text/javascript">
function validateForm()
{
var x=document.forms["login"]["username"].value;
if (x==null || x=="")
  {
  alert("username must be filled out");
  return false;
  }
  var y=document.forms["login"] ["password"].value;
  if(y=null||y=="")
  {
  alert("You cannot leave the password field empty");
  return false;
  }
}
</script>
</head>

<body>
<img  align="top" src="logo.jpg"/>
<br/>
<br/>
<br/>
<br/>

<form method="POST"  name="login" action="loginproc.php" onSubmit="return validateForm()" >
<h3 align="center">Username :  <input type="text" name="username"><br/><br/>
Password :  <input name="password" type="password"></input><br/><br/>
<input type="submit" value="Submit"/>
<input type="reset" value="Reset"/></h3>
</form>
<br/><br/><br/>
To add Just Dial Deatails <a href="justdial.php">Click Here</a>
<br/><br/><br/>
<h4 align="center"> New User??</h4>
<a href="adminlogin.php"><h5 align="center">Sign in</h5> <a/>
</body>
</html>