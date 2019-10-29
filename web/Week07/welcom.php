<!-- welcome php file  -->  
<?php
    session_start();
    if (isset($_SESSION['username']))
    {
        $username = $_SESSION['username'];
    }
    else
    {
        header("Location: signin.php");
        die(); 
    }
    ?>
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>welcome</h1>
    <h1>Welcome to the homepage!</h1>

	Your username is: <?= $username ?><br><br>
</body>
</html>