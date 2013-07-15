<?php
$conn = mysql_connect("localhost", "root","");
 mysql_select_db("accounting");
$query  = "SELECT sno,name,course,phone,faculty,email,date,ffaculty,fdemo,fcouncel,remarks,joincourse,timings,f1name,f1course,f1number,f2name,f2course,f2number,f3name,f3course,f3number FROM feedback";
$result = mysql_query($query) or die('Error, query failed');

$tsv  = array();
$html = array();
$tsv[0]="S No.";
$tsv[1]="Name";
$tsv[2]="Course";
$tsv[3]="Phno Number";
$tsv[4]="Faculty";
$tsv[5]="Email ID";
$tsv[6]="Date";
$tsv[7]="Feedback-Faculty";
$tsv[8]="Feedback-Demo";
$tsv[9]="Feedback-Councelling";
$tsv[10]="Remarks";
$tsv[11]="Want to Join Course";
$tsv[12]="Preferred Timings";
$tsv[13]="Friend1's Name";
$tsv[14]="Friend1's Course";
$tsv[15]="Friend1's Number";
$tsv[16]="Friend2's Name";
$tsv[17]="Friend2's Course";
$tsv[18]="Friend2's Number";
$tsv[19]="Friend3's Name";
$tsv[20]="Friend3's Course";
$tsv[21]="Friend3's Number";
$sv = array();
$sv[] = implode(",", $tsv);

while($row = mysql_fetch_array($result, MYSQL_NUM))
{
   $sv[]  = implode(",", $row);
   $html[] = "<tr><td>" .implode("</td><td>", $row) .              "</td></tr>";
}

$sv = implode("\r\n", $sv);

$html = "<table>" . implode("\r\n", $html) . "</table>";

$fileName = 'Feedback_details.csv';
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=$fileName");

echo $sv;


?>