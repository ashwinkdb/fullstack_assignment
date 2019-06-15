<html>
<head><title>Signup</title>
<style>  .di
  {
margin-left:0%;
background:purple;
height:auto;
font-size: 45px;
width:100%;
margin-top:0%;
color: white;
text-align: center;
  }
  .button {
      display: block;
      width: 115px;
      height: 45px;
      background: #4E9CAF;
      padding: 10px;
      text-align: center;
      border-radius: 5px;
      text-decoration: none;
      color: white;
      font-weight: bold;
  }
</style>
</head>
<body>
  <?php
$name=  $_POST["Name"];
$email=$_POST["email"];
$mob=  $_POST["mob"];
$add=$_POST["add"];
$pass=$_POST["pass"];
$pin = $_POST["pin"];
$con = mysqli_connect("localhost:3306","root","","restaurant") or die("Connection Failed");

$qu1= "Select pass FROM users WHERE email='".$email."';";
$qu2= "Select pass FROM users WHERE mob='".$mob."';";
$hashed = hash('sha512',$pass);
$query="INSERT INTO users(name,email,mob,address,pass,pin) VALUES('$name','$email','$mob','$add',md5('$pass'),'$pin') ";
$run1=mysqli_query($con,$qu1);$run2=mysqli_query($con,$qu2);
if($run1 || $run2)
{
  if(mysqli_num_rows($run1)>0)
       { echo "<div class=di ><center>User with same email address Already Exists <br> Try Logging In </center></div><center ><font size=20px ><br><br><a href=login.html class=button  >login</a></font></center> ";      }
             else
  if(mysqli_num_rows($run2)>0)
      { echo "<div class=di ><center>User with same mobile no Already Exists <br> Try Logging In </center></div><center ><font size=20px ><br><br><a href=login.html class=button  >login</a></font></center> ";      }
else
 {
$runqu = mysqli_query($con,$query);
if($runqu)
{ echo "<div class=di ><br>Registered Successfully</div><font size=20px ><center><a href=login.html class=button  >login</a></font></center><br><br>";}
else {echo "<div class=di >Error</div> ";}

}

}else {echo "<div class=di >Data can't be fetched</div>";}

   ?>
