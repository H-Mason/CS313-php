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

    //conditionally add to the small tables
    $stmt = $db->prepare('INSERT INTO genus (genus) SELECT :genus from genus WHERE NOT EXISTS (Select 1 from genus where genus = :genus)');
    $stmt->bindValue(':genus', $genus);
    $stmt->execute();

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