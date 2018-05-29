<?php
$conn=mysqli_connect('localhost','root','',"osp");
if(!$conn)
{
die('could not connect'.mysqli_error());
}
$acc1_no=$_POST['t1'];
$acc2_no=$_POST['t2'];
$bal=$_POST['t3'];
$sql="select * from account1 where account_num=$acc1_no";
$sql2="select * from account1 where account_num=$acc2_no";
$res=mysqli_query($conn,$sql);
if(!$res)
{
die('could not select'.mysqli_error());
}
$res1=mysqli_query($conn,$sql2);
if(!$res1)
{
die('could not select'.mysqli_error());
}
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
$b=$row['bal'];
echo "Balance in $acc1_no before transcation is $b<br>";
if($b>$bal)
{
$sqlf="update account1 set bal=$b-$bal where account_num=$acc1_no";
$resf=mysqli_query($conn,$sqlf);
$bb=$b-$bal;
echo "The current balance in account $acc1_no after transcation is $bb<br>";
if(!$resf)
{
die('could not be transfered'.mysqli_error());
}
}
else
{
echo "Your Account balance is low <br>";
}
}
while($row=mysqli_fetch_array($res1,MYSQLI_ASSOC))
{
if($b>$bal)
{
$b1=$row['bal'];
echo "Balance in $acc2_no before transcation is $b1<br>";
$sqlg="update account1 set bal=$b1+$bal where account_num=$acc2_no";
$bbb=$b1+$bal;
echo "The Current balance in account $acc2_no after transcation is $bbb<br>";
$resg=mysqli_query($conn,$sqlg);
if(!$resg)
{
die('could not be transfered'.mysqli_error());
}
}
else
{
echo "Your balance is low in your account";
}
}
echo "The Amount $bal is successfully transferred from $acc1_no to $acc2_no";
mysqli_close($conn);
?>
<html>
<head>
<style>
.div2{
      position: relative;
      top:140;
      left:500;
      font-size: 40;
    }
.hea{
      font-family:"Gabriola";
      font-size: 50px;
      color:white;
      position: fixed;
      top:0;
      left: 0;
      width: 100%;
      background-color: rgb(110,142,5);
    }
 .but1{
      font-family: "Arial";
      height: 35;
      width: 200;
      background-color: rgb(229, 244, 66);
      border-radius: 7px;
      font-weight: bold;
    }
    .but1:hover{
      cursor: pointer;
      background-color:rgb(228, 239, 110);
    }
	.tab1{
      padding-left: 50px;
      position: relative;
      top:180;
	  left:350;
      width: 40%;
      border-radius: 5px;
      padding-top:  25px;
      padding-left: 35px;
      padding-bottom: 35px;
      background-color: rgb(234, 236, 239);
      text-align: center;
      margin-bottom: 20px;
      border-width: 1px;
      border-color: black;
      border-style: solid;
    }
.div
{
width:200px;
float:center;
}
.div1
{
width:800px;
float:center;
}
</style>
</head>
<body>
<form method="POST" action="main.php">
<br><br><br>
<input type="submit" name="b1" value="Logout" class="but1">
</form>
</div>
</body>
</html>
