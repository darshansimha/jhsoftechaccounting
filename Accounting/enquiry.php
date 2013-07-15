<html>
<head>
<link rel="stylesheet" href="style1.css" type="text/css" >
<script language="JavaScript" src="ts_picker.js">
	 </script>
<title>Enquiry Form</title>
<script type="text/javascript">
	function validateForm()
	 {
	 var b=document.forms["enq"]["name"].value;
	var c=document.forms["enq"]["fatname"].value;
	var d=document.forms["enq"]["address"].value;
	var e=document.forms["enq"]["mob"].value;
	var f=document.forms["enq"]["email"].value;
	var h=document.forms["enq"]["advt"].value;
	var i=document.forms["enq"]["followup"].value;
	
	if(b==""||b==null)
		 {
		 alert("You have to enter student name");
		 return false;
		 }
		 if(c==""||c==null)
		 {
		 alert("You have to enter a father name");
		 return false;
		 }
		 if(d==""||d==null)
		 {
		 alert("You have to enter the residence address");
		 return false;
		 }
		 if(isNaN(e))
           {
              alert("Enter a phone number/Enter a numeric value")
              return false;
           }
           if (e.length<10 || e.length>10)
           {
                alert("enter 10 characters exactly");
                return false;
           }
		    /*var atpos=f.indexOf("@");
			var dotpos=f.lastIndexOf(".");
			if (atpos<1 || dotpos<atpos+2 || dotpos+2>=h.length)
			  {
			  alert("Not a valid e-mail address");
			  return false;
			  }*/
			  if(h==""||h==null)
		 {
		 alert("You have to select mode of advertising");
		 return false;
		 }
			if(i==""||i==null)
		 {
		 alert("You have to enter the name of the person following up");
		 return false;
		 }  
	}

</script>
</head>
<body onSubmit="return validateForm()">
<img  align="top" src="logo.jpg"/><br/><br/>
<h2 align="center">Please Enter the Enquiry Details</h2><br/><br/><br/><br/><br/>
<form  name="enq" action="enq.php" method="post">
<b>
Date :  <input type="text" name="date">
<a href="javascript:show_calendar('document.enq.date', document.enq.date.value);"><img src="cal.gif" width="16" height="16" border="0" ></a>
<br/><br/>
Name:  <input type="text" name="name"><br/><br/>
Father Name :  <input type="text" name="fatname"><br/><br/>
Address For Communication :  <input type="text" name="address"><br/><br/>
Residence Phone Number :  <input type="text" name="rphno"><br/><br/>
Mobile Number:  <input type="text" name="mob"><br/><br/>
Email ID :  <input type="text" name="email"><br/><br/>
Qualification :  <input type="text" name="qualification"><br/><br/>
Computer Awareness(if any) :  <input type="text" name="compaw"><br/><br/>
How did you come to know about us:<br/>
<select name="advt">
<option value="banners">Banners</option>
<option value="posters">Posters</option>
<option value="paper ads">Paper Ads</option>
<option value="Pamphlets">Phamplets</option>
<option value="friends">Friends</option>
<option value="just dial">Just Dial</option>
<option value="sms">SMS</option>
<option value="website">Website</option>
</select><br /><br />
Experience:   <input type="text" name="experience"><br/><br/>
Timings Preferred:   <input type="text" name="tpref"><br/><br/>
Followed Up By: <input type="text" name="followup"><br/><br/>
<input type="submit" value="Submit Values" name="sub"> <input type="reset" name="res" value="Reset Data"><br/><br/>
</form>
</b>
</body>
</html>