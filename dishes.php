<html>
<head><title>Dishes</title>
  <link href="style.css" rel="stylesheet">  
</head>
<body>
<?php
$id=$_GET['id'];
$res= $_GET['res'];
echo "<div style='text-align:center;margin-top:2%;font-size:30px;margin-bottom:2%;'>$res</div>";
$con =mysqli_connect("localhost","root","","restaurant") or die("Connection Failed");
$query = "Select * from dishes WHERE id ='".$id."';";
$run=mysqli_query($con,$query);
if($run)
{
if(mysqli_num_rows($run)>0)
{
while($row=mysqli_fetch_array($run))
{
    echo "<div  style='box-shadow:5px 1px 22px gray;width:80%;float:left;margin-left:10%;margin-right:12%;height:300px;border:solid 2px gray'><img src =".$row['thumbnail']." style='margin-left:2%;margin-top:2%;width:300px;float:left;height:250px'><div style='margin-right:auto;margin-left:30%;width:auto;float:left'><br><br><br><br>Restaurant ID :".$row['id']."<br><br><br> Restaurant : ".$row['name']." <br><br><br><br><br><br><br></div></div>";



             }
        }
}
?>

</body>
