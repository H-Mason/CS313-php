<?php
    require '../../db/dbConnect.php';
    $db = get_db();
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
    <h1>Add New Animal to Database</h1>
    <div><form action="addAnimalConf.php" method="post"> 
        Animal Name: <input type="text" class="input" name="name"><br>
        Animal Description: <input type="text" class="input" name="description"><br>
        Picture:
        Diet: 
        <?php
            print("<select class='input' name='diet'>");
            foreach($db->query("SELECT diet FROM diet") as $row)
            {
                print("<option value='" . $row['diet'] . "'>" . $row['diet'] . "</option>");
            }
            print("</select><br>");
            
        ?>
        Species:
        Genus:
        Order:
        Family:
        Size:
        Size Description:
        Region Picture:
        <input type="submit" >
    </form></div>
</body>