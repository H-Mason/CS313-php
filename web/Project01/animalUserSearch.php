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
            print("<form action='animalLookup.php' method='post' id='inputForm' >");
            print("Animal Name: <input type='text' class='input' name='input'><br><br>");
            print("<input type='submit' class='directory' id='submit' name='byName' value='Search'>");
            print("</form>");
        }
        if (isset($_POST['bySize'])) {
            print("<form action='animalLookup.php' method='post' id='inputForm'>");
            print("Size: <select class='input' name='input'>");
            print("<option value='Small'>Small</option>");
            print("<option value='Medium'>Medium</option>");
            print("<option value='Large'>Large</option>");
            print("</select><br><br>");
            print("<input type='submit' class='directory' id='submit' name='bySize' value='Search'>");
            print("</form>");
        }
        if (isset($_POST['byGenus'])) {
            print("<form action='animalLookup.php' method='post' id='inputForm'>");
            print("Genus: <input type='text' class='input' name='input'><br><br>");
            print("<input type='submit' class='directory' id='submit' name='byGenus' value='Search'>");
            print("</form>");
        }
        if (isset($_POST['byFamily'])) {
            print("<form action='animalLookup.php' method='post' id='inputForm'>");
            print("Family: <input type='text' class='input' name='input'><br><br>");
            print("<input type='submit' class='directory' id='submit' name='byFamily' value='Search'>");
            print("</form>");
        }
        if (isset($_POST['byOrder'])) {
            print("<form action='animalLookup.php' method='post' id='inputForm'>");
            print("Order: <input type='text' class='input' name='input'><br><br>");
            print("<input type='submit' class='directory' id='submit' name='byOrder' value='Search'>");
            print("</form>");
        }
        if (isset($_POST['byDiet'])) {
            print("<form action='animalLookup.php' method='post' id='inputForm'>");
            print("Diet: <select class='input' name='input'>");
            print("<option value='Herbivore'>Herbivore</option>");
            print("<option value='Omnivore'>Omnivore</option>");
            print("<option value='Carnivore'>Carnivore</option>");
            print("<option value='Insectivore'>Insectivore</option>");
            print("</select><br><br>");
            print("<input type='submit' class='directory' id='submit' name='byDiet' value='Search'>");
            print("</form>");
        }
        print("<br><a href='animalLookupMain.php' class='directory' id='directory'>Return Home</a>");
    ?>
  </div>
</body>