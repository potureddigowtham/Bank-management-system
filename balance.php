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
    <span class="hname"><b>Online Survey</b></span>
  </div>
  <div  class="tab1">
<form method="POST" action="check.php">
<table align="center">
<tr>
<td>
<h3> <b> Enter Account_no <b> </h3>
</td>
<td>
<input type="text" name="t1">
</td>
</tr>
</table>
<center>
<input type="submit" value="Check" name="b1" class="but1">
</center>
</form>
</div>
</body>
</html>