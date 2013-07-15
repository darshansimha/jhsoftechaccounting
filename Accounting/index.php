<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="jquery.js"></script>

<script type="text/javascript" src="jquery.easing.1.3.js"></script>
<script type="text/javascript" src="sprite.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home Page</title>
<script language="JavaScript1.1">
var slideimages=new Array()
var slidelinks=new Array()
function slideshowimages(){
for (i=0;i<slideshowimages.arguments.length;i++){
slideimages[i]=new Image()
slideimages[i].src=slideshowimages.arguments[i]
}
}

function slideshowlinks(){
for (i=0;i<slideshowlinks.arguments.length;i++)
slidelinks[i]=slideshowlinks.arguments[i]
}

function gotoshow(){
if (!window.winslide||winslide.closed)
winslide=window.open(slidelinks[whichlink])
else
winslide.location=slidelinks[whichlink]
winslide.focus()
}

//-->
</script>
</head>

<body>
<img  align="top" height="55" width="1365" src="logo.jpg"/>
<div id="nav">
<ul id="navigation">
	<li><a class="home" href="index.php"></a></li>
	<li><a class="services" href="login.php"></a></li>
	<li><a class="portfolio" href="enquiry.php"></a></li>
	<li><a class="about" href="feedback.php"></a></li>
    <li><a class="contact" href="contacts.php"></a></li>
	
</ul>
</div>
<br/>

<a href="javascript:gotoshow()"><img align="center" src="work.jpg" name="slide" width="1365" height="450"></a>
<script>
<!--

//configure the paths of the images, plus corresponding target links
slideshowimages("nature.jpg","vacation.jpg","work.jpg","biking.jpg")


//configure the speed of the slideshow, in miliseconds
var slideshowspeed=2000

var whichlink=0
var whichimage=0
function slideit(){
if (!document.images)
return
document.images.slide.src=slideimages[whichimage].src
whichlink=whichimage
if (whichimage<slideimages.length-1)
whichimage++
else
whichimage=0
setTimeout("slideit()",slideshowspeed)
}
slideit()

//-->
</script>
<font color="white">

</font>
</body>
</html>
