<html>
<head>
<title>Log In</title>
<link rel="stylesheet" type="text/css" href="css/login1.css">

</head>

<body>
<div class="main">
		
<ul>

<li><a href="/php/parking/index.php">Home</a></li>

<li><a href="/php/parking/about.php" >About</a></li>
<li><a href="/php/parking/contact.php" >Contact</a></li>

	</ul>
		
	</div>


<script>  
    function validateform(){  
    
var x = document.getElementById("myEmail").pattern;
  document.getElementById("demo").innerHTML = x;
	alert("enter correct email");
    }  
    </script> 




<div class="box">
<h4>

<center>
<div class="login">
<img src="icon.jpg">
</div>
<h3>Sign In With User Name</h3>
<br>
<form name="myform" method="post" action="login.php" onsubmit="return validateform()" >  

USERNAME
<br>
<input type="email" id="myEmail" name="username" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="enter Email Id">

<br><br>
PASSWORD
<br>
<input type="password" name="password" placeholder="password" required>
<br><br>
<input type="submit" name="submit" value="LogIn">

<br>
<br>OR

<h3>Does not have account?<br><a href="/php/parking/registration.php">sign up now</a></h3> 



</form>
</center>
</h4>
</div>
</body>
</html>




<?php

session_start();
include"dbconnection.php";
$message="";
if(isset($_POST['submit']))
{
$a=$_POST['username'];
$p=$_POST['password'];
$sql="select * from customer where email_id='$a' and password='$p'";
$result=pg_query($con,$sql);
if(pg_num_rows($result)>0)
{
$_SESSION['username']=$a;

header('location:book1.php');
}
 else
{
$message="invalid id or password";
}
}
setcookie('email',$_POST['username']);


?>





