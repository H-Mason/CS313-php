<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $major = $_POST['major'];
    $comments = $_POST['comments'];
    $NA;
    $SA;
    $EU;
    $AS;
    $AUS;
    $AF;
    $AN;
		
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
  		print"name: $name <br>";
			print"Email: <a href='mailto: $email'>$email</a> <br>";
			print"Major: $major <br>";
			print"Comments: $comments <br>";
			if (isset($_POST['NA'])) {
        	$NA = $_POST['NA'];
   		 		print $NA . "<br>";
    	}
			if (isset($_POST['SA'])) {
   		 		$SA = $_POST['SA'];
        	print $SA ."<br>";
    	}
			if (isset($_POST['EU'])) {
   		 		$EU = $_POST['EU'];
        	print $EU ."<br>";
    	}

			if (isset($_POST['EU'])) {
   		 		$AS = $_POST['EU'];
        	print $AS ."<br>";
    	}

			if (isset($_POST['AUS'])) {
   		 		$AUS = $_POST['AUS'];
        	print $AUS ."<br>";
    	}

			if (isset($_POST['AF'])) {
   		 		$AF = $_POST['AF'];
        	print $AF ."<br>";
    	}

			if (isset($_POST['AN'])) {
   		 		$AN = $_POST['AN'];
        	print $AN ."<br>";
    	}



			

   ?>
</body>
</html>
