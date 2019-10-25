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
            <td class="tLeft">Animal Description: </td>
            <td class="tRight"><textarea rows="5" cols="50"  name="description"></textarea></td>
        </tr>
        <tr>
            <td class="tLeft">Picture:</td>
        </tr>
        <tr>
            <td class="tLeft">Diet:</td>
            <td class="tRight"><?php
                    print("<select class='input' name='diet'>");
                    foreach($db->query("SELECT diet FROM diet") as $row)
                    {
                        print("<option value='" . $row['diet'] . "'>" . $row['diet'] . "</option>");
                    }
                    print("</select>");
                ?></td>
        </tr>
        <tr>
            <td class="tLeft">Species: </td>
            <td class="tRight"><input type="text" class="input" name="name"></td>
        </tr>
        <tr>
            <td class="tLeft">Genus: </td>
            <td class="tRight"><input type="text" class="input" name="name"></td>
        </tr>
        <tr>
            <td class="tLeft">Order: </td>
            <td class="tRight"><input type="text" class="input" name="name"></td>
        </tr>
        <tr>
            <td class="tLeft">Family: </td>
            <td class="tRight"><input type="text" class="input" name="name"></td>
        </tr>
        <tr>
            <td class="tLeft">Size: </td>
            <td class="tRight"><?php
                    print("<select class='input' name='size'>");
                    foreach($db->query("SELECT size FROM size") as $row)
                    {
                        print("<option value='" . $row['size'] . "'>" . $row['size'] . "</option>");
                    }
                    print("</select>");
                ?></td>
        </tr>
        <tr>
            <td class="tLeft">Size Description: </td>
            <td class="tRight"><textarea class="inputDesc" rows="5" cols="50" name="sizeDescription"></textarea></td>
        </tr>
        <tr>
            <td class="tLeft">Region Picture:</td>
        </tr>
        </table>
        <input type="submit" class="directory" id="directory" value="Add Animal">
    </form></div>
</body>