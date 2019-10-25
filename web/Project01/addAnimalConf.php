<?php
    require '../../db/dbConnect.php';
    $db = get_db();
    $name = $_POST['name'];
    $descText = $_POST['desc'];
    $diet = $_POST['diet'];
    $species = $_POST['species'];
    $genus = $_POST['genus'];
    $order = $_POST['order'];
    $family = $_POST['family'];
    $size = $_POST['size'];
    $sizeDescText = $_POST['sizeDesc'];
    $region;
    $picture;
    $genusId;
    $orderId;
    $familyId;

    //conditionally add to the small tables
    //genus
    //test to see if it's already in there
    try {
        $stmt = $db->prepare('SELECT genus FROM genus WHERE genus = :genus');
        $stmt->bindValue(':genus', $genus);
        $stmt->execute();
    }
    catch (PDOException $ex)
    {
        echo "Error connecting to DB. Details: $ex";
        die();
    }
    $count = $stmt->rowCount();
    //if it isn't, then add it and get the ID
    if ($count == 0) {
        try {
            $stmt = $db->prepare('INSERT INTO genus (genus) VALUES (:genus)');
            $stmt->bindValue(':genus', $genus);
            $stmt->execute();
            $genusId = $db->lastInsertId('genus_genus_id_seq');
        }
        catch (PDOException $ex)
        {
            echo "Error connecting to DB. Details: $ex";
            die();
        }
    }
    //otherwise get the existing id
    else {
        try {
            $stmt = $db->prepare('SELECT genus FROM genus WHERE genus = :genus');
            $stmt->bindValue(':genus', $genus);
            $stmt->execute();
            $genusId = $stmt->fetchAll();
        }
        catch (PDOException $ex)
        {
            echo "Error connecting to DB. Details: $ex";
            die();
        }
    }

    //order
    //test to see if it's already in there
    try {
        $stmt = $db->prepare('SELECT order_name FROM a_order WHERE order_name = :order');
        $stmt->bindValue(':order', $order);
        $stmt->execute();
    }
    catch (PDOException $ex)
    {
        echo "Error connecting to DB. Details: $ex";
        die();
    }
    $count = $stmt->rowCount();
    //if it isn't, then add it and get the ID
    if ($count == 0) {
        try {
            $stmt = $db->prepare('INSERT INTO a_order (order_name) VALUES (:order)');
            $stmt->bindValue(':order', $order);
            $stmt->execute();
            $orderId = $db->lastInsertId('a_order_order_id_seq');
        }
        catch (PDOException $ex)
        {
            echo "Error connecting to DB. Details: $ex";
            die();
        }
    }
    //otherwise get the existing id
    else {
        try {
            
        }
        catch (PDOException $ex)
        {
            echo "Error connecting to DB. Details: $ex";
            die();
        }
    }
    
    //family
    //test to see if it's already in there
    try {
        $stmt = $db->prepare('SELECT family FROM family WHERE family = :family');
        $stmt->bindValue(':family', $family);
        $stmt->execute();
    }
    catch (PDOException $ex)
    {
        echo "Error connecting to DB. Details: $ex";
        die();
    }
    $count = $stmt->rowCount();
    //if it isn't, then add it and get the ID
    if ($count == 0) {
        try {
            $stmt = $db->prepare('INSERT INTO family (family) VALUES (:family)');
            $stmt->bindValue(':family', $family);
            $stmt->execute();
            $orderId = $db->lastInsertId('family_family_id_seq');
        }
        catch (PDOException $ex)
        {
            echo "Error connecting to DB. Details: $ex";
            die();
        }
    }
    //otherwise get the existing id
    else {
        try {
            
        }
        catch (PDOException $ex)
        {
            echo "Error connecting to DB. Details: $ex";
            die();
        }
    }

    // try {

    // }
    // catch (PDOException $ex)
    // {
    //     echo "Error connecting to DB. Details: $ex";
    //     die();
    // }

    // INSERT INTO order(order) SELECT ':order' WHERE NOT EXISTS (Select 1 from order where order = ':order');
    // INSERT INTO family(family) SELECT ':family' WHERE NOT EXISTS (Select 1 from family where family = ':family');
    // $stmt->bindValue(':order', $order);
    // $stmt->bindValue(':family', $family);
    //add all that data to the animal table
    // $stmt = $db->prepare(
    //     "INSERT INTO animals
    //     (animal_name, picture, description, scientific_name, 
    //     genus_id, family_id, order_id, diet_id, size_id, 
    //     size_description, region) 
    //     VALUES
    //     ($name, , , $species, , , , $diet, $size, , )");




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="project01.css">
    <title>Mammals of North America</title>
</head>
<body>
    <h1>New Animal Added!</h1>
    <?php
        
    ?>
  
</body>