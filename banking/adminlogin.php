<html>
<head>
<title> Banking project </title>
</head>
<body bgcolor="lightblue">
<img src="images/head1.png"><br><br>
<?php
include("connfile.php");
session_start();

if($_SERVER['REQUEST_METHOD']=='POST')
{
	//echo("working");
	$v1=$_POST['text1'];
	$v2=$_POST['text2'];
	//echo $v1." ".$v2;
	$sqlvar="select * from logintab where userid='$v1' and pword='$v2'";
	$result=$conn ->query($sqlvar);
	if($result -> num_rows>0)
	{
		header('location: adminmainpage.php');
	}
	else
	{
		echo('userid or password is not correct');
	}
	
}
	
?>

<form name=form1 method="post" action="adminlogin.php">
<table width=100%>
<tr><td width="30%">  

<table width=100% border=2 cellspacing=5 cellpadding=5>
<tr><td colspan=2>Admin login </tr></tr>
<tr><td>UserID</td><td> <input type=text name=text1></td></tr>
<tr><td>Password</td><td> <input type=password name=text2></td></tr>
<tr><td> </td><td> <input type=submit name=login style="height:40px; width:150px"></td></tr>
</table>
</td><td width="50%"> <img src="images/pic1.png" style="width:100%;"></td></tr>
</table>
</form>
<br>
<img src="images/head2.png"
</body>
</html>