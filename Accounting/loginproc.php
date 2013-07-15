<?php

$f_usr= $_POST["username"];

$f_pswd= $_POST["password"];

$con=mysql_connect("localhost","root","");


if(!$con)

{

        die('Connection Failed'.mysql_error());

}


mysql_select_db("accounting",$con);

$result=mysql_query("SELECT * FROM users");


while($row=mysql_fetch_array($result))
{
if($row["username"]==$f_usr && $row["password"]==$f_pswd)
      {
	 header('Location: account.php');
	break;
	}  

    else
			{
         header('Location: login.php');
		 }
         
}


?>
