<html>
<body>
<?php 
session_start();
echo "text entered:$_GET[t1]<br>";
echo "captcha shown:$_SESSION[my_captcha]<br>";
if($_GET['t1']==$_SESSION['my_captcha'])
{
echo "captcha validation passed";
}
else
{
echo "captcha validation failed";
}
unset($_SESSION['my_captcha']);
?>
</body>
</html>