<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $major = $_POST['major'];
    $comments = $_POST['comments'];
    $checkedCont = $_POST['continents'];
		
    $continents = array("NA"=>"North America", "SA"=>"South America", 
                  "EU"=>"Europe", "AS"=>"Asia", "AUS"=>"Australia", 
                      "AF"=>"Africa", "AN"=>"Antarctica");  
  ?>

<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <?php
               print "<h2>Information: </h2>";
  		print"name: $name <br>";
			print"Email: <a href='mailto: $email'>$email</a> <br>";
			print"Major: $major <br>";
      print"Comments: $comments <br>";
      print "<br>";
      print "<h2>Continents visited: </h2>";
			foreach ($checkedCont as $value) {
        	print $continents[$value] . "<br>";
      }
   ?>
</body>
</html>