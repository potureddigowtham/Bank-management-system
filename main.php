<html>
  <head>
    <title>Online Banking System</title>
    <style>
    .hea{
      font-family:"Gabriola";
      font-size: 70px;
      color:white;
      position: fixed;
      top:0;
      left: 0;
      width: 100%;
      background-color: rgb(110,142,5);
      z-index: 10;
    }
    .hname{
      padding-left: 150px;
      margin:25px;
    }
    .div2{
      position: relative;
      top:190;
      left:280;
      font-size: 65;
    }
    .but1{
      font-family: "Arial";
      font-size: 20;
      height: 55;
      position: relative;
      width: 130;
      background-color: rgb(229, 244, 66);
      border-radius: 7px;
      font-weight: bold;
      border-width: 1px;
      top: 20;
      left: 200;
    }
    .but1:hover{
      cursor: pointer;
      background-color:rgb(228, 239, 110);
    }
    </style>
  </head>
  <body>
    <div class="hea">
    <span class="hname"><b>WELCOME TO NET BANKING</b></span>
  </div>
  <div class="div2">
    Make Your Transactions Online
    <br>
    <form>
    <input type="button" class="but1" name="signup" value="Sign Up" onClick=" document.location.href='newaccount.php'">
    <input type="button" class="but1" name="signin" value="Login" onClick=" document.location.href='login.php'">
	 <input type="button" class="but1" name="signin" value="Admin" onClick=" document.location.href='alogin.php'">
  </form>
  </div>
  </body>
</html>