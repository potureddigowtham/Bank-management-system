<html>
<body bgcolor="lightpink">
<?php
$conn=mysql_connect('localhost','root','');
if(!$conn)
{
die('could not connect:'.mysql_error());
}
$sql='select * from account1';
mysql_select_db('osp');
$acc_no=$_POST['t1'];
$pass=$_POST['t2'];
$res=mysql_query($sql,$conn);
if(!$res)
{
die('could not get related data:'.mysql_error());
}
while($row=mysql_fetch_array($res))
{
$a=$row['account_num'];
$p1=$row['pass1'];
$bal=$row['bal'];
}
if(($acc_no==$a)&&($pass==$p1))
?>
<form action="proceesing.php">
<table align="center">
<tr>
<td>
Enter Account_No
</td>
<td>
<input type="text" name="text1">
</td>
</tr>
<tr>
<td>
Enter Amount
</td>
<td>
<input type="text" name="text2">
</td>
</tr>
<tr>
<td>
</td>
</tr>
<tr>
<td>
<input type="submit" name="b1" value="transfer">
</td>
</tr>
</table>
<?php
$conn=mysql_connect('localhost','root','');
if(!$conn)
{
die('could not connect:'.mysql_error());
}
mysql_select_db('osp');
$acc_no1=$_POST['text1'];
$bal1=$_POST['text2'];
if($bal1<$bal)
{
$sql3='select * from account1';
$res1=mysql_query($sql3,$conn);
while($row=mysql_fetch_array($res1))
{
$a1=$row['account_num'];
if($a1==$acc_no1)
{
$sql1='update account1 set bal=$bal1+$bal2 where account_no=$acc_no1';
mysql_query($sql1,$conn);
}
echo "Amount $bal1 transfered Successfully";
}
}
else
{
echo "Transfer amount is grater than your current balance";
}
mysql_close($conn);
?>
</body>
</html>