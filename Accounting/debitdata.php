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
	 $sql="INSERT INTO debit(date,paidto,towards,mode,chequeno,total,followup)
    VALUES ('$_POST[date]','$_POST[paidto]','$_POST[towards]','$_POST[mode]','$_POST[chequeno]','$_POST[total]','$_POST[followup]')";
    if (!mysql_query($sql,$con))
    {
    die('Error: ' . mysql_error());
    }
    echo "Your Information Was Successfully Posted";
	?>