<html>
<head><title>Top Restaurant's</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<?php


$vara = $_GET['name'];
echo "<div style='background:#FFFFCC;height:40px;width:100%;'><div style='font-family:sans-serif;border:2px solid ;float:left;color:black;font-size:30px;text-align:left; '> K Y S T E R S</div>";
echo "<div style='margin-left:90%;background:#FFFFCC;height:40px;font-size:30px;text-decoration:underline'>Hi $vara</div></div>";
echo "<div style='text-align:center;width:100%;font-size:30px'>Trending Restaurants !<button class=btn onclick=location.href='index.php'  style='float:right;margin-right:3.4%;height:30px;width:100px'>Log Out</button></div><br><br>";

$con =mysqli_connect("localhost","root","","restaurant") or die("Connection Failed");
$query = "Select * from restaurant;";
$run=mysqli_query($con,$query);
if($run)
{
if(mysqli_num_rows($run)>0)
{
while($row=mysqli_fetch_array($run))
{         $ii=$row['id'];$res=$row['name'];
    echo "<div  style='box-shadow:5px 1px 22px gray;width:80%;float:left;margin-left:10%;margin-right:12%;height:300px;border:solid 2px gray'><img src =".$row['thumbnail']." style='margin-left:2%;margin-top:2%;width:300px;float:left;height:250px'><div style='margin-right:30%;margin-left:10%;width:300px;float:left'><br><br><br><br>Restaurant ID :".$row['id']."<br><br><br> Restaurant : ".$row['name']." <br><br><br> Address :".$row['address']."<br><br><br><br></div>
  <div style=''><a href='dishes.php?id=$ii&res=$res' style='margin-top:40%;text-align:center'><br><br><br><br><br><br><br>Explore</a></div>
  </div>";




             }

             }

}

   ?>
 </body>
 </html>
