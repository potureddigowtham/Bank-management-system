<html>
<head>
<title>
Adding new record
</title>
<style>
.hea{
    font-family:"Gabriola";
    font-size: 50px;
    color:white;
    position: fixed;
    top:0;
    left: 0;
    width: 100%;
    background-color: rgb(110,142,5);
    z-index: 10;
  }
 .but1{
    font-family: "Arial";
    height: 35;
    width: 90;
    background-color: rgb(229, 244, 66);
    border-radius: 7px;
    font-weight: bold;
  }
  .but1:hover{
    cursor: pointer;
    background-color:rgb(228, 239, 110);
  }
   .tab1{
    position: relative;
    top:140;
    left:50;
    font-size: 40;
  }
</style>
</head>
<body>
<div class="hea">
  <span class="hname"><b>Online Banking</b></span>
</div>
<div class="tab1">
<?php
extract($_POST);
if(isset($fb1))
{
$n1=$_POST['text1'];
$n2=$_POST['t2'];
$n3=$_POST['t3'];
$n4=$_POST['t4'];
$n5=$_POST['t5'];
$n6=$_POST['text6'];
$n7=$_POST['t7'];
$n8=$_POST['t8'];
if (!preg_match("/^[0-9]{6}$/",$n1))
{
	echo "Error in account number<br>";
	return 0;
}
if (!preg_match("/^[a-zA-Z0-9]+$/",$n2))
{
	if (!preg_match("/^[a-zA-Z0-9]{15}$/",$n3))
{
	echo "Error in password<br>";
	return 0;
if($n2!=$n3)
{
echo "Password sholud be same";
}
}
}
if (!preg_match("/^[a-zA-Z\s]+$/",$n4) )
{
	echo "Error in :Only letters and white space allowed<br>";
	return 0;
}
if (!preg_match("/^[a-zA-Z\s]+$/",$n5) )
{
	echo "Error in :address";
	return 0;
}
if (!preg_match("/^[0-9]{10}$/",$n6))
{
	echo "Error in mobile number<br>";
	return 0;
}
/*
if(!preg_match("/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+$/",$n7))
{
	echo "Error in email<br>";
	return 0;
}*/
if (!preg_match("/^[0-9]+$/",$n8))
{
	echo "Error in balance<br>";
	return 0;
}
}
?>
<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,"osp");
if(!$conn)
{
die('could not connect:'.mysqli_connect_error());
}
$acc_no=(int)($_POST['text1']);
$pass1=$_POST['t2'];
$pass2=$_POST['t3'];
$name=$_POST['t4'];
$add=$_POST['t5'];
$con_num=$_POST['text6'];
$acc_type=$_POST['type1'];
$bal=(int)($_POST['t8']);
$email=$_POST['t7'];
$sql="insert into account1".
"(account_num,pass1,pass2,name,address,phone_num,account_type,email,bal)".
"values".
"($acc_no,'$pass1','$pass2','$name','$add',$con_num,'$acc_type','$email',$bal)";
$res=mysqli_query($conn,$sql);
if(!$res)
{
die('could not enter data:'. mysqli_error($conn));
}
echo "<center>  <h4> Account has been created Successfully </center> </h4>";
echo "<center> <h3>  Amount in ur account is $bal  </h3> </center>";

mysqli_close($conn);
?> 
<form method="POST" action="main.php">
<center> <input type="submit" value="LOGOUT" name="b1" class="but1"> </center>
</form>
</div>
</body>
</html>