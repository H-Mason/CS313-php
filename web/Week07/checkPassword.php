<?php
    session_start();
    require './dbConnect.php';
    $db = get_db();
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $db->prepare('SELECT password FROM login WHERE username=:username');
    $stmt->bindValue(':username', $username);
    $result = $stmt->execute();

    if ($result) {
        $row = $stmt->fetch();
		$hashedPasswordFromDB = $row['password'];
		// now check to see if the hashed password matches
		if (password_verify($password, $hashedPasswordFromDB))
		{
            $_SESSION['username'] = $username;
			header("Location: welcom.php");
			die(); // we always include a die after redirects.
		}
		else
		{
			header('Location: signin.php');
            die();
		}
    }
    else {
        header('Location: signin.php');
        die();
    }
    
?>