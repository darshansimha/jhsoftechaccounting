<html>
<head>
<link rel="stylesheet" href="style1.css" type="text/css" />
<script language="JavaScript" src="ts_picker.js">
</script>
</head>
<title>Just Dial Info</title>
<body>
<h2> Enter the Just Dial Details</h2><br/><br/>
<form method="post" name="jd" action="justdialformdata.php">
Date : <input type="text" name="date">
<a href="javascript:show_calendar('document.jd.date', document.jd.date.value);"><img src="cal.gif" width="16" height="16" border="0" alt="Click Here to Pick up the timestamp"></a>
<br/><br/>
Name :  <input type="text" name="name"><br/><br/>
Mobile :  <input type="text" name="phno"><br/><br/>
Course :  <input type="text" name="course"><br/><br/>
Mail Id :  <input type="text" name="mail"><br/><br/>
Status :  <input type="text" name="stat"><br/><br/>
Mail Sent :
<select name="mails">
<option value="Yes">Yes</option>
<option value="No">No</option>
</select><br /><br /> 
SMS Sent :
<select name="smss">
<option value="Yes">Yes</option>
<option value="No">No</option>
</select><br /><br />
<input type="submit" name="sub"> <input type="reset" name="reset">
</form> 
</body>
</html>