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
    $sql="INSERT INTO userdata (firstname,lastname,studenttype,datedemo,course1,course2,totfee,fee1,datefee1,receiptno1,fee2,datefee2,receiptno2,fee3,datefee3,receiptno3,fee4,datefee4,receiptno4,fee5,datefee5,receiptno5,balance,duedate,faculty,timings,timingvalue,phone1,phone2,email1,email2,facebook,twitter)
    VALUES ('$_POST[fname]','$_POST[lname]','$_POST[st]','$_POST[ddemo]','$_POST[course1]','$_POST[course2]','$_POST[tfee]','$_POST[fist]','$_POST[dfist]','$_POST[rno1]','$_POST[sist]','$_POST[dsist]','$_POST[rno2]','$_POST[tist]','$_POST[dtist]','$_POST[rno3]','$_POST[fouri]','$_POST[dfouri]','$_POST[rno4]','$_POST[fivei]','$_POST[dfivei]','$_POST[rno5]','$_POST[bal]','$_POST[due]','$_POST[faculty]','$_POST[t1]','$_POST[tval]','$_POST[p1]','$_POST[p2]','$_POST[e1]','$_POST[e2]','$_POST[fb]','$_POST[twt]')";
    
	if (!mysql_query($sql,$con))
   		 {
   	 die('Error: ' . mysql_error());
   		 }
    	echo "Your Information Was Successfully Posted";
	
?>
