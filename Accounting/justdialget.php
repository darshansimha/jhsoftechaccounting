<?php
$conn = mysql_connect("localhost", "root","");
 mysql_select_db("accounting");
$query  = "SELECT date,name,phno,course,mailid,status,mailsent,smssent FROM justdial";
$result = mysql_query($query) or die('Error, query failed');
$tsv  = array();
$html = array();

$tsv[0]="Date";
$tsv[1]="Name";
$tsv[2]="Phone Number";
$tsv[3]="Course";
$tsv[4]="Email Id";
$tsv[5]="Status";
$tsv[6]="Mail Sent";
$tsv[7]="SMS Sent";
$sv = array();
$sv[] = implode(",", $tsv);

while($row = mysql_fetch_array($result, MYSQL_NUM))
{
   $sv[]  = implode(",", $row);
   $html[] = "<tr><td>" .implode("</td><td>", $row) .              "</td></tr>";
}

$sv = implode("\r\n", $sv);

$html = "<table>" . implode("\r\n", $html) . "</table>";

$fileName = 'justdial_details.csv';
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=$fileName");

echo $sv;


?>