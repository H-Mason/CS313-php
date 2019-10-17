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
    <form>
      Animal Name:
    </form> 
    <?php
      
      $stmt = ($db->query("SELECT animals.animal_name,
                  animals.picture,
                  animals.description,
                  genus.genus AS "genus",
                  family.family AS "family",
                  a_order.order_name AS "order",
                  size.size AS "size",
                  animals.size_description,
                  animals.region,
                  diet.diet AS "diet"
            FROM   animals
            JOIN   genus ON genus.genus_id = animals.genus_id
            JOIN   family ON family.family_id = animals.family_id 
            JOIN   a_order ON a_order.order_id = animals.order_id
            JOIN   size ON size.size_id = animals.size_id
            JOIN   diet ON diet.diet_id = animals.diet_id
            where  animals.animal_name = 'Mule Deer';");
      
      print('Animal name: ' . $stmt['animal_name'] . '<br>');
      print('Species: ' . $stmt['scientific_name'] . '<br>');
      print('Genus: ' . $stmt['genus_id'] . '<br>');
      // $genus = ($db->query("SELECT genus FROM genus WHERE genus_id=$genus_id"));
      // print('Genus: ' . $genus);
      print('<img src=\'../project1Data/' . $stmt['picture'] . '\'<br>');
      $descFile = '../project1Data/' . $stmt['description'];
      $desc = fopen($descFile, "r") or die("Unable to open file!");
      print('<div class=\'desc\'>' . fread($desc,filesize($descFile)) . '</div><br>');
      fclose($desc);
      $descFile = '../project1Data/' . $stmt['size_description'];
      $desc = fopen($descFile, "r") or die("Unable to open file!");
      print('<div class=\'desc\'>' . fread($desc,filesize($descFile)) . '</div><br>');
      fclose($desc);
      print('<img src=\'../project1Data/' . $stmt['region'] . '\'<br>'); 
      
      //print("genus: " . $stmt.genus);
      // foreach ($db->query("SELECT animal_name, picture, description, scientific_name, 
      // genus_id, family_id, order_id, size_id, size_description, region, diet_id 
      // FROM animals WHERE animal_name='Whitetail Deer'") as $row) {
      //   print('Animal name: ' . $row['animal_name'] . '<br>');
      //   print('Species: ' . $row['scientific_name'] . '<br>');
      //   // $genus_id = $row['genus_id'];
      //   // $genus = ($db->query("SELECT genus FROM genus WHERE genus_id=$genus_id"));
      //   // print('Genus: ' . $genus);
      //   print('<img src=\'../project1Data/' . $row['picture'] . '\'<br>');
      //   $descFile = '../project1Data/' . $row['description'];
      //   $desc = fopen($descFile, "r") or die("Unable to open file!");
      //   print('<div class=\'desc\'>' . fread($desc,filesize($descFile)) . '</div><br>');
      //   fclose($desc);
      //   $descFile = '../project1Data/' . $row['size_description'];
      //   $desc = fopen($descFile, "r") or die("Unable to open file!");
      //   print('<div class=\'desc\'>' . fread($desc,filesize($descFile)) . '</div><br>');
      //   fclose($desc);
      //   print('<img src=\'../project1Data/' . $row['region'] . '\'<br>');

      //   $stmt = $db->query("SELECT *
      //   from animals
      //   INNER JOIN genus 
      //   ON genus.genus=animals.genus_id
      //   WHERE genus.genus_id=1");
      //   print ($stmt.genus);
      }
    ?>
  </div>
</body>