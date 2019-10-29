<!-- sign up php file  -->
<?php
  require './dbConnect.php';
  $db = get_db();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
</head>
<body>
<h1>Sign z Page</h1>

<form action="insertUser.php" method="POST" align="center">
<br>
Username:<input type="text" name="username"><br><br><br>
Password :<input type="password" name="password"><br><br>

<input type="Submit"  value="Submit">

</form>





    
</body>
</html>