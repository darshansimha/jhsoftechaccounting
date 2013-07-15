<?php
$conn = mysql_connect("localhost", "root","");
 mysql_select_db("accounting");
$query  = "SELECT sno,date,name,fathername,address,resphno,mobile,email,qualification,compawareness,advertisment,experience,preferredtime,followup FROM enquiry";
$result = mysql_query($query) or die('Error, query failed');

$tsv  = array();
$html = array();
$tsv[0]="S No.";
$tsv[1]="Date";
$tsv[2]="Name";
$tsv[3]="Father Name";
$tsv[4]="Address";
$tsv[5]="Residence Phone Number";
$tsv[6]="Mobile Number";
$tsv[7]="Email ID";
$tsv[8]="Qualification";
$tsv[9]="Computer Awareness";
$tsv[10]="Advertisement";
$tsv[11]="Experience";
$tsv[12]="Preferred Timings";
$tsv[13]="Followed Up By";
$sv = array();
$sv[] = implode(",", $tsv);

while($row = mysql_fetch_array($result, MYSQL_NUM))
{
   $sv[]  = implode(",", $row);
   $html[] = "<tr><td>" .implode("</td><td>", $row) .              "</td></tr>";
}

$sv = implode("\r\n", $sv);

$html = "<table>" . implode("\r\n", $html) . "</table>";

$fileName = 'Enquiry_details.csv';
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=$fileName");

echo $sv;


?>