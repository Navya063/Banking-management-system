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
	$v1=$_SESSION['acno'];
	$v2=$_POST['text2'];
	$v3=$_POST['text3'];
	
	//echo $v1." ".$v2;
	$nvar=1001;
	$sqlvar="select max(tranno) + 1 from trantab";
	$result=$conn ->query($sqlvar);
	if($row=$result->fetch_row())
	{
		$nvar=$row[0];
	}
	if($nvar===null){$nvar=1001;}
	//echo($nvar);
	$d1=(date('y/m/d'));
	$sqlvar="insert into trantab values($nvar,'$d1',$v1,0,$v2,'$v3')";
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

<form name=form1 method="post" action="custtransfer.php">


<table width=100% border=2 cellspacing=5 cellpadding=5 align=center>
<tr><td colspan=2>Transfer Money </tr></tr>
<tr><td>To AcNo</td><td> <input type=text name=text1></td></tr>
<tr><td>Amount</td><td> <input type=text name=text2></td></tr>
<tr><td>Transfer Details</td><td> <input type=text name=text3></td></tr>
<tr><td><a href=custmainpage.php> Back </a> </td><td> <input type=submit name=login style="height:40px; width:150px"></td></tr>
<tr><td colspan=2><?php echo $res;?> </tr></tr>
</table>

</form>
<table width=100%>
<tr height=200><td></td></tr>
</table>
<img src="images/head2.png"
</body>
</html>