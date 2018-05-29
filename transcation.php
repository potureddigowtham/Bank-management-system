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
</style>
</head>
<body>
<div class="hea">
    <span class="hname"><b>Online Survey</b></span>
  </div>
  <div  class="tab1">
<form name="f1" action="trans1.php" method="POST">
<table align="center">
<tr>
<td>
<b>Account_No</b>
</td>
<td>
<input type="text" name="t1">
</td>
</tr>
<tr>
<td>
<b>Transfer Account_no </b>
</td>
<td>
<input type="text" name="t2">
</td>
</tr>
<tr>
<td>
<b>Enter Amount</b>
</td>
<td>
<input type="text" name="t3">
</td>
</tr>
<tr colspan="3">
<td>
<input type="submit" name="b1" value="procced" class="but1">
</td>
<td>
<input type="reset" name="b2" class="but1">
</form>
</td>
</tr>
</table> 
<center>
<form type="f2" action="login.php">
<input type="submit" name="b3" value="Cancel" class="but1">
</form>
</center>
<div>
</body>
</html>