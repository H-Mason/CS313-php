<!-- sign in php  -->
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
    <title>Sign In</title>
</head>
<body>
    <h1>Sign Up Here</h1>
    <form action=".php" method="post">
        Username: <input type="text" name="username">
        Password: <input type="text" name="password">
        <input type="submit">
    </form>

    <a href="signup.php">Sign Up</a>
</body>
</html>