<html>
<head>
<script language="JavaScript" src="ts_picker.js">
	 </script>
	 <script type="text/javascript">
	function validateForm()
	 {
	 var a=document.forms["feedback"]["name"].value;
	 var b=document.forms["feedback"]["course"].value;
	 var c=document.forms["feedback"]["cno"].value;
	 var d=document.forms["feedback"]["fname"].value;
	 var e=document.forms["feedback"]["email"].value;
	 var f=document.forms["feedback"]["ff"].value;
	 var g=document.forms["feedback"]["fd"].value;
	 var h=document.forms["feedback"]["fc"].value;
	 var i=document.forms["feedback"]["jc"].value;
	 var j=document.forms["feedback"]["preft"].value;
	 if(a==""||a==null)
		 {
		 alert("You have to enter student name");
		 return false;
		 }
		 if(b==""||b==null)
		 {
		 alert("You have to enter a course");
		 return false;
		 }
		 if(isNaN(c))
           {
              alert("Enter a phone number/Enter a numeric value")
              return false;
           }
           if (c.length<10 || c.length>10)
           {
                alert("enter 10 characters exactly");
                return false;
           }
		   if(d==""||d==null)
		 {
		 alert("You have to enter Father's name");
		 return false;
		 }
		   /*var atpos=e.indexOf("@");
			var dotpos=e.lastIndexOf(".");
			if (atpos<1 || dotpos<atpos+2 || dotpos+2>=h.length)
			  {
			  alert("Not a valid e-mail address");
			  return false;
			  }*/
			  if(f==""||f==null)
		     {
		       alert("Faculty feedback cannot be left empty");
		       return false;
		     }
			 if(g==""||g==null)
		    {
				alert("Demo feedback cannot be left empty");
				return false;
		   }
		   if(h==""||h==null)
		    {
			alert("Councelling feedback caannot be left empty");
			return false;
		   }
		   if(i==""||i==null)
		    {
		     alert("You should say yes or no for joining the course");
		     return false;
		     }
			 if(a==""||a==null)
		     {
		       alert("You cannot leave preferred timings empty");
		       return false;
		     }
	 }
	 
	 </script>
<title>Demo Feedback</title>
<link rel="stylesheet" href="style1.css" type="text/css" >
</head>
<body onSubmit="return validateForm()">
<img  align="top" src="logo.jpg"/><br/><br/>
<h2 align="center"> Feedback Form For Demo Class</h2><br/><br/><br/>
<form name="feedback" method="post" action="feed.php">
Student Name: <input type="text" name="name"><br/><br/>
Course: <input type="text" name="course"><br/><br/>
Contact Number: <input type="text" name="cno"><br/><br/>
Faculty Name: <input type="text" name="fname"><br/><br/>
Email Id: <input type="text" name="email"><br/><br/>
Date:<input type="text" name="date">
<a href="javascript:show_calendar('document.feedback.date', document.feedback.date.value);"><img src="cal.gif" width="16" height="16" border="0" alt="Click Here to Pick up the timestamp"></a><br/><br/>
Your Opinion:<br/><br/>
About Faculty:<br/>
<select name="ff">
<option value="excellent">Excellent</option>
<option value="good">Good</option>
<option value="average">Average</option>
</select><br /><br />
About Demo:<br/> 
<select name="fd">
<option value="excellent">Excellent</option>
<option value="good">Good</option>
<option value="average">Average</option>
</select><br /><br />
About Councelling:<br/>
<select name="fc">
<option value="excellent">Excellent</option>
<option value="good">Good</option>
<option value="average">Average</option>
</select><br /><br />
Remarks about Demo Class:  <input type="text" name="rdc"><br/><br/>
Do you want to join the course:<br/> 
<select name="jc">
<option value="yes">yes</option>
<option value="no">no</option>
</select><br /><br />
Preferable Timings: <input type="text" name="preft"><br/><br/>
Friends You want to refer to:<br/>
Friend 1:
Name:<input type="text" name="f1name"> Course:<input type="text" name="f1course"> Contact Number: <input type="text" name="f1num"><br/><br/>
Friend 2:
Name:<input type="text" name="f2name"> Course:<input type="text" name="f2course"> Contact Number: <input type="text" name="f2num"><br/><br/>
Friend 3:
Name:<input type="text" name="f3name"> Course:<input type="text" name="f3course"> Contact Number: <input type="text" name="f3num"><br/><br/>
<input type="submit" value="Submit" name="submit"> <input type="reset" name="res" value="Reset Data">
</body>
</html>

