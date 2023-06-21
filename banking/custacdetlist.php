<html>
<head>
<title> Banking project </title>
</head>
<style>
body{
	font-size:20px;
}
table{
	font-size:20px
}
</style>
<body bgcolor="lightblue">
<img src="images/head1.png"><br><br>
<table align=center border=1 width=80% cellpadding=5 cellspacing=5>

<tr><td colspan=4 align=left><h3><a href=custlogin.php> click here to login</a></h3></td></tr>
<tr><td colspan=4><h3> please select the AC type then sign up</h3></td></tr>
<tr><td> AC Name</td><td>Details</td><td>Facilities</td><td>Minbal</td></tr>
<?php
include("connfile.php");
	
	$sqlvar="select * from  actypetab order by actypename";
	$result=$conn -> query($sqlvar);
	while($row=$result -> fetch_row()){
		echo("<tr><td><a href=custsignup.php?actype=".$row[0].">".$row[0]. "</a></td><td>".$row[1]. "</td><td>".$row[2]. "</td><td>".$row[3]." </td></tr>");
	}
	
?>
</table>
<a href=mainpage.php> Back </a>
<table width=100%>
<tr height=200><td></td></tr>
</table>
<img src="images/head2.png"
</body>
</html>
