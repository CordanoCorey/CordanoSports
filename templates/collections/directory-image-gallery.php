<html>
<body <body bgcolor="Silver">
<head> 
<?php
// Dump this file whatever.html into any directory
// that holds your images. This script will display
// files that end with *gif *jpg *png in a pretty good
// picture display gallery. 

//Read filenames!!!
$dir = opendir(".");
$hm=0;
//Load the files from images directory to filename array
while (($file = readdir($dir)) !== false)
  {
     if (eregi("gif", $file) || eregi("jpg", $file) || eregi("png", $file))
	         {      
                  $fn[] = $file;//add the file into the files array
                  $hm++;
          }
  }

closedir($dir);
 ?>
<SCRIPT LANGUAGE="JavaScript">
browserName = navigator.appName;
browserVer = parseInt(navigator.appVersion);
ns3up = (browserName == "Netscape" && browserVer >= 3);
ie4up = (browserName.indexOf("Microsoft") >= 0 && browserVer >= 4);
function doPic(imgName) {
if (ns3up || ie4up) {
imgOn = ("" + imgName);
document.mainpic.src = imgOn;
  }
}
</SCRIPT>
        
</head>
<title>Picture Gallery </title>

<body>
        <center><h1>Cheapass Choppers</h1></center>
<hr>
<center>
<table BORDERCOLOR="#FFFFFF" width=480 border=12 cellspacing=0 cellpadding=0>
<tr><td colspan=4 align=center><img name="mainpic" src="<?php echo $fn[0] ?>" width=560 height=440 border=0></td>
</tr>
<tr>

<?

// PHP Display the pictures
$hm=$hm-1;
for ($i=0; $i<=$hm; $i++)
  {
               echo "<a href=\"javascript:doPic('$fn[$i]')\">";           
               echo "<img src=\"$fn[$i]\" width=90 height=60 border=0></a>";
  }
?>
</td>
</tr>
</table>
</center>
<p><center>
<font face="arial, helvetica" size="2"><a href="http://www.cheapasscoppers.com">Cheap Ass Choppers</a></font>
<FORM><INPUT TYPE="button" VALUE="Go Back" onClick="history.go(-1);return true;"></FORM>
</center><hr><p>
</body>
</html>