<html>
<head>
<title>
Login 
</title>
<style>
.div2{
      position: relative;
      top:140;
      left:280;
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
      padding-left: 50px;
      position: relative;
      top:180;
      width: 40%;
      border-radius: 5px;
      padding-top:  25px;
      padding-left: 35px;
      padding-bottom: 35px;
      background-color: rgb(234, 236, 239);
      text-align: left;
      margin-bottom: 20px;
      border-width: 1px;
      border-color: black;
      border-style: solid;
    }
.table
{
font-size:25px;
font-family: "Times New Roman", Times, serif;
}
</style>
<script type="text/javascript" language="javascript">
function RefreshImage(valImageId)
{
var objImage = document.getElementById(valImageId)
if (objImage == undefined)
{
return;
}
var now = new Date();
objImage.src = objImage.src.split('?')[0] + '?x=' + now.toUTCString();
}
</script>
</head>
<body>
<div class="hea">
    <span class="hname"><b>Sign in</b></span>
  </div>
<div class="div2">
    Sign In for your account
    <span style="font-size:15; padding-left:110px;">Don't have an account? <br><a style="padding-left:590px;" href="signup.php">Sign Up</a></span>
</div>
<center>
  <div class="tab1">
<table class="table">
<form method="POST" action="aloginpage.php">
<tr>
<td>
Account No 
</td>
<td>
<input type="text" name="t1">
</td>
</tr>
<tr>
<td>
 Password 
</td>
<td>
<input type="password" name="t2">
</td>
</tr>
<tr>
<td rowspan=2 valign=top>
Verification Code
</td>
<td  align=center>
<img src="captcha1.php" id="imgCaptcha" onContextMenu="return false;" ondrag="return false;" onmousedown="return false;">
</td>
</tr>
<tr>
<td>
<input type="text" name="text">&nbsp;&nbsp;&nbsp;&nbsp;
<a href="javascript:void(0);" onclick="RefreshImage('imgCaptcha');"><font color=#black>Change Verification Code</font></a>
</td>
</tr>
<tr><td>
<input type="submit" value="Login" name="b1" class="but1">
</form>
</td>
<td><br>
<form method="POST" action="main.php">
<input type="submit" value="Exit" name="b2" class="but1">
</form>
</td>
</tr>
</center>
</table>
</div>
</body>
</html>
