<html>
<head>
<title>Administrators's Login</title>
<link rel="stylesheet" href="style1.css" type="text/css" />
<script type="text/javascript">
function validateForm()
{
var x=document.forms["login"]["adminname"].value;
if (x==null || x=="")
  {
  alert("Administrator name cannot be left empty");
  return false;
  }
  var y=document.forms["login"] ["paswd"].value;
  if(y=null||y=="")
  {
  alert("Password Field cannot be left empty");
  return false;
  }
}
</script>
</head>
<body>
<img  align="top" src="logo.jpg"/><br/><br/>
<h2 align="center"> To Register you need to be an Administrator</h2>
<br/><br/><br/><br/><br/>
<form method="POST"  name="login" action="loginadmin.php" onSubmit="return validateForm()" >
<h3 align="center">Administrator Name : <input type="text" name="adminname"><br/><br/>
Password :   <input name="paswd" type="password"></input><br/><br/>
<input type="submit" value="Submit"/>
<input type="reset" value="Reset"/></h3>
<br/>
<br/>
<br/>
</form>

</body>
</html>