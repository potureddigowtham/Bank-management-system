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
<div class="hea">
    <span class="hname"><b>Sign In</b></span>
  </div>
<div  class="div2">
<br>
<form method="POST" action="transcation.php">
<input type="submit" value="Transcation" class="but1">
</form>
<form method="POST" action="balance.php">
<input type="submit" value="Balance Equiry" class="but1">
</form>
<form method="POST" action="main.php">
<input type="submit" value="Logout" class="but1">
</form>
</div>
<div  class="tab1">
<?php
$conn=mysqli_connect('localhost','root','');
if(!$conn)
{
die('could not connect:'.mysqli_error($conn));
}
$acc_no=$_POST['t1'];
$pass=$_POST['t2'];
$sql="select * from account1 where account_num=$acc_no";
mysqli_select_db($conn,'osp');
$res=mysqli_query($conn,$sql);
if(!$res)
{
die('could not get related data:'.mysqli_error($conn));
}
while($row=mysqli_fetch_array($res))
{
$a=$row['account_num'];
$p1=$row['pass1'];

?>
</div>
<?php

}
mysqli_close($conn);
?>
</body>
</html>
