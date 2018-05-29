<?php
$conn=mysqli_connect('localhost','root','',"osp");
if(!$conn)
{
die('could not connect'.mysqli_error());
}
$acc_no=$_POST['t1'];
$sql="select * from account1 where account_num=$acc_no";
$res=mysqli_query($conn,$sql);
if(!$res)
{
die('could not fetch'.mysqli_error());
}
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
$b=$row['bal'];
echo "Balance in account $acc_no is $b<br>";
}
mysqli_close($conn);
?>
<html>
<head>
<style>
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
</style>
</head>
<body>
<div  class="div2">
<br>
<form method="POST" action="loginpage.php">
<input type="submit" value="Home" class="but1">
</form>
<form method="POST" action="main.php">
<input type="submit" value="Logout" class="but1">
</form>
</div>
</body>
</html>