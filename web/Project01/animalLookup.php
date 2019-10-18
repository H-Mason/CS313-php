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
  <h1>Learn about Mammals!</h1>
  <div>
    <?php
        if (isset($_POST['byName'])) {
            print("<form action='animalLookup.php' method='post' id='inputForm' name='inputForm'>");
            print("Animal Name: <input type='text' class='input' name='input'><br><br>");
            print("<input type='submit' class='directory' id='submit' value='Search'>");
            print("</form>");
        }
        if (isset($_POST['bySize'])) {
            print("<form action='animalLookup.php' method='post' id='inputForm' name='inputForm'>");
            print("Animal Name: <input type='text' class='input' name='input'><br><br>");
            print("<input type='submit' class='directory' id='submit' value='Search'>");
            print("</form>");
        }
        if (isset($_POST['byGenus'])) {
            print("<form action='animalLookup.php' method='post' id='inputForm' name='inputForm'>");
            print("Animal Name: <input type='text' class='input' name='input'><br><br>");
            print("<input type='submit' class='directory' id='submit' value='Search'>");
            print("</form>");
        }
        if (isset($_POST['byFamily'])) {
            print("<form action='animalLookup.php' method='post' id='inputForm' name='inputForm'>");
            print("Animal Name: <input type='text' class='input' name='input'><br><br>");
            print("<input type='submit' class='directory' id='submit' value='Search'>");
            print("</form>");
        }
        if (isset($_POST['byOrder'])) {
            print("<form action='animalLookup.php' method='post' id='inputForm' name='inputForm'>");
            print("Animal Name: <input type='text' class='input' name='input'><br><br>");
            print("<input type='submit' class='directory' id='submit' value='Search'>");
            print("</form>");
        }
        if (isset($_POST['byDiet'])) {
            print("<form action='animalLookup.php' method='post' id='inputForm' name='inputForm'>");
            print("Animal Name: <input type='text' class='input' name='input'><br><br>");
            print("<input type='submit' class='directory' id='submit' value='Search'>");
            print("</form>");
        }
    ?>
  </div>
</body>