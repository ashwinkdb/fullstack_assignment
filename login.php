<html>
<head><title>Redirectiing ..... </title>
<link href="style.css" rel="stylesheet">
</head>
<body >
<?php
$email=$_POST["email"];
$pass = $_POST["pass"];$pas=md5($pass);
$con =mysqli_connect("localhost","root","","restaurant") or die("Connection Failed");
$query = "Select pass,name from users WHERE email='".$email."';";
$run=mysqli_query($con,$query);
if($run)
{
if(mysqli_num_rows($run)>0)
{
  if($row=mysqli_fetch_array($run)) {
       if($pas=="".$row['pass']."")
       {
     header("Location:Profile.php?name=".urlencode("".$row['name']));}
       else {

         echo "<div style='background:url(https://newmibridges.michigan.gov/resource/1557577540000/ISD_Icons/landing-page/group-3.svg);background-size: 100% 100%;height:100%;width:100%;text-align:center;color:white;font-size:30px'><br><br>Your login credentials are not correct<br><br>You will be redirected to Login Page Shortly</div>";
header( "refresh:2; url=login.html" );
       }
}

}
else { echo "<div style='background:url(https://newmibridges.michigan.gov/resource/1557577540000/ISD_Icons/landing-page/group-3.svg);background-size: 100% 100%;height:100%;width:100%;text-align:center;color:white;font-size:30px'><br><br>No User found <form action=signup.html><input class=btn style='width:200px' type=submit Value='SIGN UP here'></form><br><br>You will be redirected to Login Page Shortly</div>";
                header( "refresh:2; url=login.html" );
}

}

/*  */
?>
