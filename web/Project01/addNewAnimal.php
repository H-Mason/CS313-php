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
    <div><form action="addAnimalConf.php" method="post" enctype="multipart/form-data"> 
        <table>
        <tr>
            <td class="tLeft">Animal Name: </td>
            <td class="tRight"><input type="text" class="input" name="name"></td>
        </tr>
        <tr>
            <td class="tLeft">Animal Description: </td>
            <td class="tRight"><textarea rows="5" cols="50"  name="desc"></textarea></td>
        </tr>
        <tr>
            <td class="tLeft">Picture:</td> 
            <td class="tRight"><input class="inputDesc" type="file" name="picture" id="picture"></td>
        </tr>
        <tr>
            <td class="tLeft">Diet:</td>
            <td class="tRight"><?php
                    print("<select class='input' name='diet'>");
                    foreach($db->query("SELECT diet, diet_id FROM diet") as $row)
                    {
                        print("<option value='" . $row['diet_id'] . "'>" . $row['diet'] . "</option>");
                    }
                    print("</select>");
                ?></td>
        </tr>
        <tr>
            <td class="tLeft">Species: </td>
            <td class="tRight"><input type="text" class="input" name="species"></td>
        </tr>
        <tr>
            <td class="tLeft">Genus: </td>
            <td class="tRight"><input type="text" class="input" name="genus"></td>
        </tr>
        <tr>
            <td class="tLeft">Order: </td>
            <td class="tRight"><input type="text" class="input" name="order"></td>
        </tr>
        <tr>
            <td class="tLeft">Family: </td>
            <td class="tRight"><input type="text" class="input" name="family"></td>
        </tr>
        <tr>
            <td class="tLeft">Size: </td>
            <td class="tRight"><?php
                    print("<select class='input' name='size'>");
                    foreach($db->query("SELECT size, size_id FROM size") as $row)
                    {
                        print("<option value='" . $row['size_id'] . "'>" . $row['size'] . "</option>");
                    }
                    print("</select>");
                ?></td>
        </tr>
        <tr>
            <td class="tLeft">Size Description: </td>
            <td class="tRight"><textarea class="inputDesc" rows="5" cols="50" name="sizeDesc"></textarea></td>
        </tr>
        <tr>
            <td class="tLeft">Region Picture:</td>
            <td class="tRight"><input class="fileInput" type="file" name="region" id="region">
            <label for="region">Choose a file</label></td>
        </tr>
        </table>
        <input type="submit" class="directory" id="directory" value="Add Animal">
    </form></div>
</body>