<html>
<head><title>Redirectiing ..... </title></head>
<body>
<?php
$email=$_POST["email"];
echo $email;
if($email=="Hi")
{header('location:index.php');}
else {header('location :signup.html');}
?>
