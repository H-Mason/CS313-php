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
        Animal Name: <input type="text" class="input" name="name"><br><br>
        Animal Description: <textarea rows="5" cols="50"  name="description"></textarea><br><br>
        Picture:
        Diet: 
        <?php
            print("<select class='input' name='diet'>");
            foreach($db->query("SELECT diet FROM diet") as $row)
            {
                print("<option value='" . $row['diet'] . "'>" . $row['diet'] . "</option>");
            }
            print("</select><br><br>");
        ?>
        Species: <input type="text" class="input" name="name"><br><br>
        Genus: <input type="text" class="input" name="name"><br><br>
        Order: <input type="text" class="input" name="name"><br><br>
        Family: <input type="text" class="input" name="name"><br><br>
        Size: 
        <?php
            print("<select class='input' name='size'>");
            foreach($db->query("SELECT size FROM size") as $row)
            {
                print("<option value='" . $row['size'] . "'>" . $row['size'] . "</option>");
            }
            print("</select><br><br>");
        ?>
        Size Description: <textarea class="inputDesc" rows="5" cols="50" name="sizeDescription"></textarea><br><br>
        Region Picture:
        <input type="submit" class="directory" id="directory" value="Add Animal">
    </form></div>
</body>