<?php
    require './dbConnect.php';
    $db = get_db();
    $username = $_POST['username'];
    $password = password_hash($_POST['password']);

    $stmt = $db->prepare("INSERT INTO login
                          ('username', 'password') 
                          VALUES (:username, :password");
    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':password', $password);
    $stmt->execute();

    header('Location: signin.php');
    die();
?>