<?php
  require '../../db/dbConnect.php';
  $db = get_db();
  $stmt = $db->prepare("SELECT *
                        from animals, genus
                        WHERE genus.genus_id=animals.genus.id;
                        ");
  $stmt->execute();
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
      //print("genus: " . $stmt.genus);
      // foreach ($db->query("SELECT animal_name, picture, description, scientific_name, 
      // genus_id, family_id, order_id, size_id, size_description, region, diet_id 
      // FROM animals") as $row) {
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
      }
    ?>
  </div>
</body>