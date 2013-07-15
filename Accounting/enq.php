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
    $sql="INSERT INTO enquiry (date,name,fathername,address,resphno,mobile,email,qualification,compawareness,advertisment,experience,preferredtime,followup)
    VALUES ('$_POST[date]','$_POST[name]','$_POST[fatname]','$_POST[address]','$_POST[rphno]','$_POST[mob]','$_POST[email]','$_POST[qualification]','$_POST[compaw]','$_POST[advt]','$_POST[experience]','$_POST[tpref]','$_POST[followup]')";
    if (!mysql_query($sql,$con))
    {
    die('Error: ' . mysql_error());
    }
    echo "Your Information Was Successfully Posted, We will be getting back to you soon";
	?>