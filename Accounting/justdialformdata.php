<html>
	<head>
	<link rel="stylesheet" href="style1.css" type="text/css" >
	</head>
	<body>
	<h1 align="center"> Thank you!</h1>
	<br/><br/><br/><br/><br/><br/>
	<p>Click here to  <a href="logout.php">Logout</a>
	</p>
	</body>
	</html>
	<?php
    
    $con = mysql_connect("localhost","root","");
    if (!$con)
    {
    die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("accounting", $con);
	 $sql="INSERT INTO justdial (date,name,phno,course,mailid,status,mailsent,smssent) VALUES('$_POST[date]','$_POST[name]','$_POST[phno]','$_POST[course]','$_POST[mail]','$_POST[stat]','$_POST[mails]','$_POST[smss]')";
	 if (!mysql_query($sql,$con))
   		 {
   	 die('Error: ' . mysql_error());
   		 }
    	echo "Your Information Was Successfully Posted";
	
?>