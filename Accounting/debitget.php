<?php
$conn = mysql_connect("localhost", "root","");
 mysql_select_db("accounting");
$query  = "SELECT sno,date,paidto,towards,mode,chequeno,total,followup FROM debit";
$result = mysql_query($query) or die('Error, query failed');
$tsv  = array();
$html = array();
$tsv[0]="S No.";
$tsv[1]="Date";
$tsv[2]="Paid to";
$tsv[3]="Towards";
$tsv[4]="Mode Of Payment";
$tsv[5]="Cheque No";
$tsv[6]="Total";
$tsv[7]="Followed Up By";
$sv = array();
$sv[] = implode(",", $tsv);
while($row = mysql_fetch_array($result, MYSQL_NUM))
{
   $sv[]  = implode(",", $row);
   $html[] = "<tr><td>" .implode("</td><td>", $row) .              "</td></tr>";
}

$sv = implode("\r\n", $sv);

$html = "<table>" . implode("\r\n", $html) . "</table>";

$fileName = 'Debit_details.csv';
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=$fileName");

echo $sv;
?>