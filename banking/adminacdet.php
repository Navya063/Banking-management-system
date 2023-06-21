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
<?php
include("connfile.php");
session_start();
$res="";
if($_SERVER['REQUEST_METHOD']=='POST')
{
	//echo("working");
	$v1=$_POST['text1'];
	$v2=$_POST['text2'];
	$v3=$_POST['text3'];
	$v4=$_POST['text4'];
	//echo $v1." ".$v2;
	$sqlvar="insert into actypetab values('$v1','$v2','$v3',$v4)";
	$result=$conn ->query($sqlvar);
	if($result)
	{
		$res="Record Inserted";
	}
	else
	{
		$res="Record not inserted";
	}
	
}
	
?>

<form name=form1 method="post" action="adminacdet.php">


<table width=100% border=2 cellspacing=5 cellpadding=5 align=center>
<tr><td colspan=2>Ac Details Entry </tr></tr>
<tr><td>AcName</td><td> <input type=text name=text1></td></tr>
<tr><td>AcDetails</td><td> <input type=text name=text2></td></tr>
<tr><td>Facilities</td><td> <input type=text name=text3></td></tr>
<tr><td>Minbal</td><td> <input type=text name=text4></td></tr>
<tr><td><a href=adminmainpage.php> Back </a> </td><td> <input type=submit name=login style="height:40px; width:150px"></td></tr>
<tr><td colspan=2><?php echo $res;?> </tr></tr>
</table>

</form>
<table width=100%>
<tr height=200><td></td></tr>
</table>
<img src="images/head2.png"
</body>
</html>