<?php

session_start();

?>
<html>
<head>
	<title>Great Number Game</title>
</head>
<style>
#container {
      width: 650px;
      height: 700px;
      margin: 0px auto;
    }
    .text {
    	margin-left:35px;
    }
    .text2 {
    	margin-left:140px;
    }
    .box {
      width: 100px;
      height: 100px;
      margin-left:110px;
      margin-bottom:10px;
    }
    .green {
      background-color: green;
  	  color:white;
  	  width:140px;
  	  height:80px;
  	  padding:30px 10px 70px 40px;
  	  margin-left:90px;
    }
    .p {
    	padding-left:10px;
    }
    .red {
      background-color: red;
      color:white;
      width:120px;
      margin-left:105px;
      padding-top:20px;
      padding-left:40px;
    }
    .guess {
    	margin-left:99px;
    	margin-bottom:10px;
    }
    .submit {
    	margin-left:160px;
    }
    .reset {
    	margin-left:30px;
    }
</style>
<body>
<div id="container">
	<div>
		<h2>Welcome to the Great Number Game!</h2>
		<h4 class="text">I am thinking of a number between 1 and 100</h4>
		<h4 class="text2">Take a guess!</h4>
	</div>
<?php 
    if(isset($_SESSION['low']))
    {
      echo $_SESSION['low'];
      unset($_SESSION['low']);
    }

    if(isset($_SESSION['high']))
    {
      echo $_SESSION['high'];
      unset($_SESSION['high']);
    }

    if(!isset($_SESSION['correct']))
    {
?>      
      <div>
        <form action="process.php" method="post">
          <input class="guess" type="text" name="guess"><br>
          <input class="submit" type="submit" value="Submit">
        </form>
      </div>
<?php
    }
    else
    {
      echo $_SESSION['correct'];
      unset($_SESSION['correct']);
    }
?>  
  </div>
</body>
</html>