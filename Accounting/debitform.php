<html>
<head>
  <title>Member Data</title>
  <link rel="stylesheet" href="style1.css" type="text/css" />
  <script language="JavaScript" src="ts_picker.js">
	 </script>
  </head>
  <body>
  <h1 align="center">Enter the Debit Details here</h1><br/><br/><br/>
  <form name="debit" action="debitdata.php" method="post">
  Date:<input type="text" name="date">
<a href="javascript:show_calendar('document.debit.date', document.debit.date.value);"><img src="cal.gif" width="16" height="16" border="0" alt="Click Here to Pick up the timestamp"></a><br/><br/>
  Paid to:  <input type="text" name="paidto"><br/><br/>
  Towards:  <input type="text" name="towards"><br/><br/>
  Mode Of Payment:<br/>
  <select name="mode">
	<option value="Cash">Cash</option>
	<option value="Cheque">Cheque</option>
	</select><br /><br />
	Cheque No:<input type="text" name="chequeno"><br/><br/>
  Total(in Rs): <input type="text" name="total"><br/><br/>
  Followed Up By:<input type="text" name="followup"><br/><br/>
  <input type="submit" name="submit" value="Submit"> <input type="reset" name="res" value="Reset Data"><br/><br/>
  </form>
  </body>
  </html>

  