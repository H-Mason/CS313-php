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
        if (isset($_POST['all'])) {
          foreach ($db->query("SELECT animal_name
                               FROM   animals") as $row) 
          {
              print("<form action='animalLookup.php' method='post'><span id='Logo' style='display:none'>
              <input type='radio' checked name='input' value='" . $row['animal_name'] . "'></span>
              <input type='submit' name='byName' class='directory' value='" . $row['animal_name'] . "'></form>");
          }
      }
        if (isset($_POST['byName'])) {
            print("<form action='animalLookup.php' method='post' id='inputForm' >");
            print("Animal Name: <input type='text' class='input' name='input'><br><br>");
            print("<input type='submit' class='directory' id='submit' name='byName' value='Search'>");
            print("</form>");
        }
        if (isset($_POST['bySize'])) {
            print("<form action='animalLookup.php' method='post' id='inputForm'>");
            print("Size: <select class='input' name='input'>");
            foreach($db->query("SELECT size FROM size") as $row)
            {
                print("<option value='" . $row['size'] . "'>" . $row['size'] . "</option>");
            }
            print("</select><br><br>");
            print("<input type='submit' class='directory' id='submit' name='bySize' value='Search'>");
            print("</form>");
        }
        if (isset($_POST['byGenus'])) {
            print("<form action='animalLookup.php' method='post' id='inputForm'>");
            print("Genus: <select class='input' name='input'>");
            foreach($db->query("SELECT genus FROM genus") as $row)
            {
                print("<option value='" . $row['genus'] . "'>" . $row['genus'] . "</option>");
            }
            print("</select><br><br>");
            print("<input type='submit' class='directory' id='submit' name='byGenus' value='Search'>");
            print("</form>");
        }
        if (isset($_POST['byFamily'])) {
            print("<form action='animalLookup.php' method='post' id='inputForm'>");
            print("Family: <select class='input' name='input'>");
            foreach($db->query("SELECT family FROM family") as $row)
            {
                print("<option value='" . $row['family'] . "'>" . $row['family'] . "</option>");
            }
            print("</select><br><br>");
            print("<input type='submit' class='directory' id='submit' name='byFamily' value='Search'>");
            print("</form>");
        }
        if (isset($_POST['byOrder'])) {
            print("<form action='animalLookup.php' method='post' id='inputForm'>");
            print("Order: <select class='input' name='input'>");
            foreach($db->query("SELECT order_name FROM order") as $row)
            {
                print("<option value='" . $row['order_name'] . "'>" . $row['order_name'] . "</option>");
            }
            print("</select><br><br>");
            print("<input type='submit' class='directory' id='submit' name='byOrder' value='Search'>");
            print("</form>");
        }
        if (isset($_POST['byDiet'])) {
            print("<form action='animalLookup.php' method='post' id='inputForm'>");
            print("Diet: <select class='input' name='input'>");
            foreach($db->query("SELECT diet FROM diet") as $row)
            {
                print("<option value='" . $row['diet'] . "'>" . $row['diet'] . "</option>");
            }
            print("</select><br><br>");
            print("<input type='submit' class='directory' id='submit' name='byDiet' value='Search'>");
            print("</form>");
        }
        print("<br><a href='animalLookupMain.php' class='directory' id='directory'>Return Home</a>");
    ?>
  </div>
      </body>