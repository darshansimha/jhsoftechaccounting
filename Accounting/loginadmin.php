<?php

$f_usr= $_POST["adminname"];

$f_pswd= $_POST["paswd"];

$con=mysql_connect("localhost","root","");


if(!$con)

{

        die('Connection Failed'.mysql_error());

}


mysql_select_db("accounting",$con);

$result=mysql_query("SELECT * FROM administrators");
echo $f_usr;
$user_logged=0;

while($row=mysql_fetch_array($result))
{
if($row["name"]==$f_usr && $row["password"]==$f_pswd)
      {
	$user_logged=1;
	 header('Location: registration.php');
	break;
	
	}  

    else

         header('Location: adminlogin.php');
         
}
?>
