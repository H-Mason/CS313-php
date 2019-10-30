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
    $filepath = "../project1Data/";
    $region = savePic('region');
    $picture = savePic('picture');

    function savePic($picName) {
        $target_dir = "../project1Data/";
        $target_file = $target_dir . basename($_FILES[$picName]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["addAnimal"])) {
            $check = getimagesize($_FILES[$picName]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                $uploadOk = 0;
            }
        }
        //Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, a picture with this name already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES[$picName]["size"] > 5000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" 
        && $imageFileType != "jpeg") {
            echo "Sorry, only JPG, JPEG, & PNG files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        //if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES[$picName]["tmp_name"], $target_file)) {
                //echo "The file ". basename( $_FILES[$picName]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        return basename($_FILES[$picName]["name"]);
    }

    $filename =  $name . "Desc.txt";
    //add the descriptions to files
    $descFile = fopen(($filepath . $filename), "w");
    fwrite($descFile, $descText);
    fclose($descFile);
    $descText = $filename;

    $sizefilename =  $name . "SizeDesc.txt";
    //add the descriptions to files
    $sizeDescFile = fopen(($filepath . $sizefilename), "w");
    fwrite($sizeDescFile, $sizeDescText);
    fclose($sizeDescFile);
    $sizeDescText = $sizefilename;
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
            $stmt = $db->prepare('SELECT genus_id FROM genus WHERE genus = :genus');
            $stmt->bindValue(':genus', $genus);
            $stmt->execute();
            $genusId = $stmt->fetch();
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
            $stmt = $db->prepare('SELECT order_id FROM a_order WHERE order_name = :order');
            $stmt->bindValue(':order', $order);
            $stmt->execute();
            $orderId = $stmt->fetch();
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
            $familyId = $db->lastInsertId('family_family_id_seq');
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
            $stmt = $db->prepare('SELECT family_id FROM family WHERE family = :family');
            $stmt->bindValue(':family', $family);
            $stmt->execute();
            $familyId = $stmt->fetch();
        }
        catch (PDOException $ex)
        {
            echo "Error connecting to DB. Details: $ex";
            die();
        }
    }
    //add all that data to the animal table, only if the animal isn't already in the system
    try {
        $stmt = $db->prepare('SELECT animal_name FROM animals WHERE animal_name = :name');
        $stmt->bindValue(':name', $name);
        $stmt->execute();
    }
    catch (PDOException $ex)
    {
        echo "Error connecting to DB. Details: $ex";
        die();
    }
    $count = $stmt->rowCount();
    if ($count == 0) {
        try {
            $stmt = $db->prepare(
                    "INSERT INTO animals
                    (animal_name, picture, description, scientific_name, 
                    genus_id, family_id, order_id, diet_id, size_id, 
                    size_description, region) 
                    VALUES
                    (:animal_name, :picture, :desc, :species, :genus, :family, :order, :diet, :size, :sizeDesc, :region)");
            $stmt->bindValue(':animal_name', $name);
            $stmt->bindValue(':picture', $picture);
            $stmt->bindValue(':desc', $descText);
            $stmt->bindValue(':species', $species);
            $stmt->bindValue(':genus', $genusId[0]);
            $stmt->bindValue(':family', $familyId[0]);
            $stmt->bindValue(':order', $orderId[0]);
            $stmt->bindValue(':diet', $diet);
            $stmt->bindValue(':size', $size);
            $stmt->bindValue(':sizeDesc', $sizeDescText);
            $stmt->bindValue(':region', $region);
            $stmt->execute();

        }
        catch (PDOException $ex)
        {
            echo "Error connecting to DB. Details: $ex";
            die();
        }
    }

    
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
    <div>
    <?php
        if ($count == 0) {
            foreach ($db->query("SELECT animals.animal_name,
                            animals.picture,
                            animals.description,
                            animals.scientific_name,
                            genus.genus AS genus,
                            family.family AS family,
                            a_order.order_name AS a_order,
                            size.size AS size,
                            animals.size_description,
                            animals.region,
                            diet.diet AS diet
                    FROM   animals
                    JOIN   genus ON genus.genus_id = animals.genus_id
                    JOIN   family ON family.family_id = animals.family_id 
                    JOIN   a_order ON a_order.order_id = animals.order_id
                    JOIN   size ON size.size_id = animals.size_id
                    JOIN   diet ON diet.diet_id = animals.diet_id
                    WHERE  animals.animal_name = '$name'") as $row) 
            {
                print('Animal name: ' . $row['animal_name'] . '<br>');
                print('Species: ' . $row['scientific_name'] . '<br>');
                print('Genus: ' . $row['genus'] . '<br>');
                print('Family: ' . $row['family'] . '<br>');
                print('Order: ' . $row['a_order'] . '<br>');
                print('Diet: ' . $row['diet'] . '<br>');
                print('Size: ' . $row['size'] . '<br>');
                print('<img src=\'../project1Data/' . $row['picture'] . '\'<br>');
                $descFile = '../project1Data/' . $row['description'];
                $desc = fopen($descFile, "r") or die("Unable to open file!");
                print('<div class=\'desc\'>' . fread($desc,filesize($descFile)) . '</div><br>');
                fclose($desc);
                $descFile = '../project1Data/' . $row['size_description'];
                $desc = fopen($descFile, "r") or die("Unable to open file!");
                print('<div class=\'desc\'>' . fread($desc,filesize($descFile)) . '</div><br>');
                fclose($desc);
                print('<img src=\'../project1Data/' . $row['region'] . '\'<br>'); 
            }
        }
        else {
            print($name . " is already in the database. <br>");
        }
        print("<br><a href='animalLookupMain.php' class='directory' id='directory'>Return Home</a><br>");
        print("<br><a href='addNewAnimal.php'><ul class='directory' id='directory'>Add New Animal to Database</ul></a>");
    ?>
    </div>
  
</body>