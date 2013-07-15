<?php
$conn = mysql_connect("localhost", "root","");
 mysql_select_db("accounting");
$query  = "SELECT sno,firstname,lastname,studenttype,datedemo,course1,course2,totfee,fee1,datefee1,receiptno1,fee2,datefee2,receiptno2,fee3,datefee3,receiptno3,fee4,datefee4,receiptno4,fee5,datefee5,receiptno5,balance,duedate,faculty,timings,timingvalue,phone1,phone2,email1,email2,facebook,twitter FROM userdata";
$result = mysql_query($query) or die('Error, query failed');
$tsv  = array();
$html = array();
$tsv[0]="S No.";
$tsv[1]="Firstname";
$tsv[2]="Lastname";
$tsv[3]="Studenttype";
$tsv[4]="Date Of Demo";
$tsv[5]="Technical Course";
$tsv[6]="Functional Course";
$tsv[7]="Total Fee Amount";
$tsv[8]="1st Fee Installment";
$tsv[9]="Date of 1st Installment";
$tsv[10]="Receipt No.1";
$tsv[11]="2nd Fee Installment";
$tsv[12]="Date Of 2nd Installment";
$tsv[13]="Receipt No.2";
$tsv[14]="3rd Fee Installment";
$tsv[15]="Date of 3rd Installment";
$tsv[16]="Receipt No.3";
$tsv[17]="4th Fee Installment";
$tsv[18]="Date Of 4th Installment";
$tsv[19]="Receipt No.4";
$tsv[20]="5th Fee Installment";
$tsv[21]="Date Of 5th Installment";
$tsv[22]="Receipt No.5";
$tsv[23]="Balance";
$tsv[24]="Due Date";
$tsv[25]="Faculty";
$tsv[26]="Timings";
$tsv[27]="Timing value";
$tsv[28]="Mobile No";
$tsv[29]="Land Line";
$tsv[30]="Email ID 1";
$tsv[31]="Email ID 2";
$tsv[32]="Facebook ID";
$tsv[33]="Twitter ID";
$sv = array();
$sv[] = implode(",", $tsv);
while($row = mysql_fetch_array($result, MYSQL_NUM))
{
   $sv[]  = implode(",", $row);
   $html[] = "<tr><td>" .implode("</td><td>", $row) .              "</td></tr>";
}
$sv = implode("\r\n", $sv);
$html = "<table>" . implode("\r\n", $html) . "</table>";
$fileName = 'account_details.csv';
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=$fileName");
echo $sv;
?>