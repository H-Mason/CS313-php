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
        <table>
        <tr>
            <td class="tLeft">Animal Name: </td>
            <td class="tRight"><input type="text" class="input" name="name"></td>
        </tr>
        <tr>
            <td>Animal Description: </td>
            <td><textarea rows="5" cols="50"  name="description"></textarea></td>
        </tr>
        <tr>
            <td>Picture:</td>
        </tr>
        <tr>
            <td>Diet:</td>
            <td><?php
                    print("<select class='input' name='diet'>");
                    foreach($db->query("SELECT diet FROM diet") as $row)
                    {
                        print("<option value='" . $row['diet'] . "'>" . $row['diet'] . "</option>");
                    }
                    print("</select>");
                ?></td>
        </tr>
        <tr>
            <td>Species: </td>
            <td><input type="text" class="input" name="name"></td>
        </tr>
        <tr>
            <td>Genus: </td>
            <td><input type="text" class="input" name="name"></td>
        </tr>
        <tr>
            <td>Order: </td>
            <td><input type="text" class="input" name="name"></td>
        </tr>
        <tr>
            <td>Family: </td>
            <td><input type="text" class="input" name="name"></td>
        </tr>
        <tr>
            <td>Size: </td>
            <td><?php
                    print("<select class='input' name='size'>");
                    foreach($db->query("SELECT size FROM size") as $row)
                    {
                        print("<option value='" . $row['size'] . "'>" . $row['size'] . "</option>");
                    }
                    print("</select>");
                ?></td>
        </tr>
        <tr>
            <td>Size Description: </td>
            <td><textarea class="inputDesc" rows="5" cols="50" name="sizeDescription"></textarea></td>
        </tr>
        <tr>
            <td>Region Picture:</td>
        </tr>
        </table>
        <input type="submit" class="directory" id="directory" value="Add Animal">
    </form></div>
</body>