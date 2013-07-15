<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<html>
<head>
  <title>Member Data</title>
  <link rel="stylesheet" href="style1.css" type="text/css" />
<script language="JavaScript" src="ts_picker.js">
	 </script>
  <script type="text/javascript">
	function validateForm()
	 {
	 var x=document.forms["accts"]["fname"].value;
	var z=document.forms["accts"] ["course1"].value;
	var a=document.forms["accts"] ["course2"].value;
	var b=document.forms["accts"] ["fist"].value;
	var c=document.forms["accts"] ["sist"].value;
	var d=document.forms["accts"] ["tist"].value;
	var e=document.forms["accts"] ["faculty"].value;
	var f=document.forms["accts"] ["t1"].value;
	var g=document.forms["accts"] ["p1"].value;
	var h=document.forms["accts"] ["e1"].value;
	var i=document.forms["accts"] ["fb"].value;
	var j=document.forms["accts"] ["twt"].value;
	     if(x==""||x==null)
		 {
		 alert("You have to enter a first name");
		 return false;
		 }
		if(z=="" && a=="")
		{
		alert("You have to select either a technical or a functional course");
		return false;
		}
	   if(b=="" && c=="" && d=="")
	   {
	   alert("Please check the installment values");
	   return false;
	   }
	   if(e==""||e==null)
	   {
	   alert("Faculty name cannot be left empty");
	   return false;
	   }
	   if(isNaN(g))
           {
              alert("Enter a phone number/Enter a numeric value")
              return false;
           }
           if (g.length<10 || g.length>10)
           {
                alert("enter 10 characters exactly");
                return false;
           }
           /*if (g.charAt(0)!="9" || g.charAt(0)!="8" || g.charAt(0)!="7")
           {
                alert("Number must start with 9 or 8 or 7");
                return false;
           }*/
		   
		   var atpos=h.indexOf("@");
			var dotpos=h.lastIndexOf(".");
			if (atpos<1 || dotpos<atpos+2 || dotpos+2>=h.length)
			  {
			  alert("Not a valid e-mail address");
			  return false;
			  }
			  if(i=="" && j=="")
			  {
			  alert("You must enter either a facebook or twitter email id");
			  return false;
			  }
				}
				</script>  
 </head>

 <body bgcolor="0084ff">
<img  align="top" src="logo.jpg"/>
 <h2 align="center"> Please Enter Valid Data in the Forms</h2>
  <br/>
  <br/>
  <br/>
  <br/>
  
<form method="POST" name="accts" action="formdata.php" onSubmit="return validateForm()">
<b>First Name*:  <input type="text" name="fname"> Last Name:  <input type="text" name="lname"><br /><br />
Student type:
<select name="st">
<option value="new">New</option>
<option value="old">old</option>
</select><br /><br />
Date of Demo:<input type="text" name="ddemo">
<a href="javascript:show_calendar('document.accts.ddemo', document.accts.ddemo.value);"><img src="cal.gif" width="16" height="16" border="0" alt="Click Here to Pick up the timestamp"></a>
 	
<br/><br/>
Course :<br/><br/>
Technical:
<select name="course1">
<option value="">None</option>
<option value="ABAP">SAP - ABAP</option>
<option value="BI & BIW">SAP - BI & BIW</option>
<option value="BASIS">SAP - BASIS</option>
</select><br /><br />
Functional:
<select name="course2">
<option value="">None</option>
<option value="FICO">SAP - FICO</option>
<option value="HR">SAP - HR</option>
<option value="SD">SAP - SD</option>
<option value="MM">SAP - MM</option>
<option value="PP">SAP - PP</option>
<option value="CRM">SAP - CRM</option>
</select><br /><br />
Total Fee: <input type="text" name="tfee"><br/><br/>

Fee(1st Installment)*: <input type="text" name="fist">
Date of 1st Installment:<input type="text" name="dfist"><a href="javascript:show_calendar('document.accts.dfist', document.accts.dfist.value);"><img src="cal.gif" width="16" height="16" border="0"></a><br/><br/><br/>
Receipt No1:<input typ="text" name="rno1"><br/><br/>

Fee(2nd Installment)*:  <input type="text" name="sist">   
Date of 2nd Installment:<input type="text" name="dsist"><a href="javascript:show_calendar('document.accts.dsist', document.accts.dsist.value);"><img src="cal.gif" width="16" height="16" border="0"></a><br/><br/> <br/>
Receipt No2:<input typ="text" name="rno2"><br/><br/>


Fee(3rd Installment)*:  <input type="text" name="tist">
Date of 3rd Installment:<input type="text" name="dtist"><a href="javascript:show_calendar('document.accts.dtist', document.accts.dtist.value);"><img src="cal.gif" width="16" height="16" border="0" alt="Click Here to Pick up the timestamp"></a><br/><br/><br/>
Receipt No3:<input typ="text" name="rno3"><br/><br/>

Fee(4th Installment)*:  <input type="text" name="fouri">
Date of 4th Installment:<input type="text" name="dfouri"><a href="javascript:show_calendar('document.accts.dfouri', document.accts.dfouri.value);"><img src="cal.gif" width="16" height="16" border="0" alt="Click Here to Pick up the timestamp"></a><br/><br/><br/>
Receipt No4:<input typ="text" name="rno4"><br/><br/>

Fee(5th Installment)*:  <input type="text" name="fivei">
Date of 5th Installment:<input type="text" name="dfivei"><a href="javascript:show_calendar('document.accts.dfivei', document.accts.dfivei.value);"><img src="cal.gif" width="16" height="16" border="0" alt="Click Here to Pick up the timestamp"></a><br/><br/><br/>
Receipt No5:<input typ="text" name="rno5"><br/><br/>

Balance:<input type="text" name="bal"><br/><br/>
Due Date: 
<input type="text" name="due">
<a href="javascript:show_calendar('document.accts.due', document.accts.due.value);"><img src="cal.gif" width="16" height="16" border="0" alt="Click Here to Pick up the timestamp"></a>
<br/><br/>
Faculty*
<input type="text" name="faculty"/><br/><br/>
Batch Timings*:
<select name="t1">
<option value="morning">Morning</option>
<option value="evening">Evening</option>
<option value="weekend">Weekend</option>
<option value="fastrack">Fastrack</option>
</select><br /><br />
Timing Value: <input type="text" name="tval"><br/><br />
mobile No*:
<input type="text" name="p1"><br /><br />
Land Line:
<input type="text" name="p2"><br /><br />
Email1*:
<input type="text" name="e1"><br /><br />
Email2(if any):
<input type="text" name="e2"><br /><br />
Facebook ID:  <input type="text" name="fb"><br /><br />
Twitter ID:   <input type="text" name="twt"><br /><br />
<input type="submit" value="Submit">   <input type="reset" name="res" value="Reset Data">
<b/>
</form>


</body>
</html>
