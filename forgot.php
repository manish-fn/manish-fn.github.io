<?php
require 'database.php';
$a=$_POST['email'];
?>					
<!DOCTYPE html>
<html>
<head>
<title>forgot password</title>
</head>
<body>
<form action="forgot2.php" method="POST">
<input type="text" name="email" placeholder="Enter the e-mail id"/>
<input type="submit" name="submit" value="retrieve"/>
</body>
</html>

