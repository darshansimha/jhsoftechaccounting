 <html>
 <head>
 <link rel="stylesheet" href="style1.css" type="text/css" />
 </head>
 <body>
 <h1 align="center">Thank you for registering</h1>
 <br/><br/><br/><br/>
 Click here to <a href="logout.php"> Logout</a><br/><br/><br/>
 </body>
 </html>
 <?php
    $con = mysql_connect("localhost","root","");
    if (!$con)
    {
    die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("accounting", $con);
    $sql="INSERT INTO users (username,password,email,image)
    VALUES ('$_POST[usname]','$_POST[pwrd]','$_POST[email]','$_POST[propic]')";
    if (!mysql_query($sql,$con))
    {
    die('Error: ' . mysql_error());
    }
    echo "You have been sucessfully registered with JH Softech\n";
	?>