<html>
<head>
<link rel="stylesheet" href="style1.css" type="text/css" />
<title> Registration </title>
<script type="text/javascript">
function validateForm()
{
var x=document.forms["reg"]["usname"].value;
var y=document.forms["reg"] ["pwrd"].value;
var z=document.forms["reg"] ["email"].value;
if (x==null || x=="")
  {
  alert("username must be filled out");
  return false;
  }
  if(y=null||y=="")
  {
  alert("You cannot leave the password field empty");
  return false;
  }
  var atpos=z.indexOf("@");
var dotpos=z.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=z.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
}
</script>
</head>
<body>
<form name="reg" action ="usdata.php" method="POST" onSubmit="return validateForm()">
<h2 align="center"> Please enter the new user's data</h2><br/><br/><br/>
Username:  <input type="text" name="usname"/><br/><br/>
Password:  <input type="password" name="pwrd"/><br/><br/>
Email ID:  <input type="text" name="email"/><br/><br/>
Image :  <input type="file" name="propic"/><br/><br/>
<input type="submit" name="submit"/>
</form>
<br/><br/>
To view existing student details  <a href="details.php"> Click here </a><br/><br/> 
To Submit a Debit Form <a href="debitform.php"> Click Here</a><br/><br/>
To get data of enquiry form <a href="enqget.php"> Click here</a><br/><br/>
To get data of Feedback form <a href="feedget.php"> Click here</a><br/><br/>
To get data of debit form <a href="debitget.php"> Click here</a><br/><br/>
To get Data Of Just Dial <a href="justdialget.php">Click here</a>
</body>
</html> 
   