<html>
<head>
<title>
New Account Creation
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
  .hname{
    padding-left: 35px;
    margin:25px;
  }
  .tab1{
    padding-left: 50px;
    position: relative;
    top:180;
    width: 40%;
    border-radius: 5px;
    padding-top:  25px;
    border-width: 1px;
    border-color: black;
    border-style: solid;
    padding-left: 35px;
    padding-bottom: 35px;
    background-color: rgb(234, 236, 239);
    text-align: left;
    margin-bottom: 20px;

  }

  .txt{
height: 30;
width: 350;
border-radius: 3px;
font-size: 15px;
font-weight: bold;
margin: 2px;
border-style: solid;
border-width: thin;
  }
  .lab{
    font-family: "Arial";
    font-weight: bold;
    font-size: 14;
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
  .div2{
    position: relative;
    top:140;
    left:280;
    font-size: 40;
  }
  .inst{
    font-size: 12;
    font-weight: bold;
    font-family:  Arial;
    color:rgb(76,76,76);
  }
  </style>
</head>
<body>
<div class="hea">
  <span class="hname"><b>Online Banking</b></span>
</div>
<div class="div2">
  Sign Up for your account
  <span style="font-size:15; padding-left:110px;">Already have an account? <br><a style="padding-left:625px;" href="login.php">Sign In</a></span>
</div>
<center>
<div class="tab1">

    <form name="f1" method="post" action="created.php">
<br>
<br>
<br>
<table class="table">
<tr>
<td> Account No </td>
<td> <input type="text" name="text1">
</td>
</tr>
<tr>
<td> Password </td>
<td> <input type="password" name="t2">
</td>
</tr>
<tr>
<td> Re-enter Password </td>
<td> <input type="password" name="t3">
</td>
</tr>
<tr>
<td>
Name </td>
<td> <input type="text" name="t4">
</td>
</tr>
<tr>
<td> Address </td>
<td> <input type="text" name="t5">
</td>
</tr>
<tr>
<td> Contact Num </td>
<td> <input type="text" name="text6">
</td>
</tr>
<tr>
<td> Account Type 
</td>
<td>
<input type="radio" name="type1" value="current">Current
</td>
</tr>
<tr>
<td>          </td>
<td>
<input type="radio" name="type1" value="saving">Saving
</td>
</tr>
<tr>
<td> E_mail </td>
<td> <input type="text" name="t7">
</td>
</tr>
<tr>
<td>
DepositBalance
</td>
<td> <input type="text" name="t8">
</td>
</tr>
<tr>
<td>
<input type="submit" value="Create" name="fb1" class="but1">
</form>
</td>
<td>
<br>
<form action="main.php" method="POST">
<input type="submit" value="Exit" name="fb2" class="but1">
</form>
</td>
</tr>
</table>
</div>
</body>
</html>