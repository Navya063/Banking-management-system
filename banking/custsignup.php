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
<script language=javascript>
function validate()
{
	//alert("testing");
	var x=document.form1.text1.value;
	if(isNaN(x)||x.length!=10)
	{
		alert("please enter 10 digit numbers only for acno");
		return false;
	}
	 x=document.form1.text2.value;
	if(x.length<4)
	{
		alert("please enter atleast 4 characters for password");
		return false;
	}
	var y=document.form1.text3.value;
	if(x!=y)
	{
		alert("password not matching");
		return false;
	}
	x=document.form1.text6.value;
	if(isNAN(x)||x.length!=10)
	{
		alert("please enter 10 digit mobile number");
		return false;
	}
	x=document.form1.text7.value;
	var atpost1=x.indexOf("@");
	var atpost2=x.indexOf(".");
	
	if(x.length!=8||atpos1<3||atpos2<5)
	{
		alert("please enter correct email id");
		return false;
	}
	
	
}

</script>
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
	$v3=$_POST['text4'];
	$v4=$_POST['text5'];
	$v5=$_POST['text6'];
	$v6=$_POST['text7'];
	$v7=$_SESSION['actype'];
	//echo $v1." ".$v2;
	$sqlvar="insert into custactab values($v1,'$v2','$v3','$v4',$v5,'$v6','$v7','N')";
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
else{
	
	$_SESSION['actype']=$_GET['actype'];
}

	
?>

<form name=form1 method="post" action="custsignup.php">


<table width=100% border=2 cellspacing=5 cellpadding=5 align=center>
<tr><td colspan=2><h3>Customer Signup <h3></tr></tr>
<tr><td>AcNo(10)</td><td> <input type=text name=text1></td></tr>
<tr><td>Password</td><td> <input type=password name=text2></td></tr>
<tr><td>Retype password</td><td> <input type=password name=text3></td></tr>
<tr><td>Person Name</td><td> <input type=text name=text4></td></tr>
<tr><td>Address</td><td> <textarea name=text5 rows=4></textarea></td></tr>
<tr><td>MobileNo</td><td> <input type=text name=text6></td></tr>
<tr><td>Email</td><td> <input type=text name=text7></td></tr>

<tr><td><a href=custacdetlist.php> Back </a> </td><td> <input type=submit name=login style="height:40px; width:150px" onclick="return validate()"></td></tr>
<tr><td colspan=2><?php echo $res;?> </tr></tr>
</table>

</form>
<table width=100%>
<tr height=200><td></td></tr>
</table>
<img src="images/head2.png"
</body>
</html>