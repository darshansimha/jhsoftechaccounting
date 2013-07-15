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
    $sql="INSERT INTO feedback (name,course,phone,faculty,email,date,ffaculty,fdemo,fcouncel,remarks,joincourse,timings,f1name,f1course,f1number,f2name,f2course,f2number,f3name,f3course,f3number)
    VALUES ('$_POST[name]','$_POST[course]','$_POST[cno]','$_POST[fname]','$_POST[email]','$_POST[date]','$_POST[ff]','$_POST[fd]','$_POST[fc]','$_POST[rdc]','$_POST[jc]','$_POST[preft]','$_POST[f1name]','$_POST[f1course]','$_POST[f1num]','$_POST[f2name]','$_POST[f2course]','$_POST[f2num]','$_POST[f3name]','$_POST[f3course]','$_POST[f3num]')";
    if (!mysql_query($sql,$con))
    {
    die('Error: ' . mysql_error());
    }
    echo "Your Information Was Successfully Posted";
	?>