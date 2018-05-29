<html>
<body>
<?php
$conn=mysql_connect('localhost','root','');
if(!$conn)
{
die('could not connect:'.mysql_error());
}
$acc_no=$_POST['t1'];
$pass=$_POST['t2'];
$sql='select * from account1';
mysql_select_db('osp');
$res=mysql_query($sql,$conn);
if(!$res)
{
die('could not get related data:'.mysql_error());
}
while($row=mysql_fetch_array($res))
{
$a=$row['account_num'];
$p1=$row['pass1'];
$p2=$row['pass2'];
$n=$row['name'];
$add=$row['address'];
$p=$row['phone_num'];
$acc=$row['account_type'];
$e=$row['email'];
if(($acc_no==$a)&&($pass==$p1))
{
echo " <b> Name: </b>$n<br> ";
echo "<b>Address:</b> $add<br>";
echo "<b>Phone_Num:</b> $p <br>";
echo "<b>E-mail</b>: $e<br>";
}
mysql_close($conn);
?>
</body>
</html>
