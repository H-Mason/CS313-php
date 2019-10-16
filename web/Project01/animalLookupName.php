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
      foreach ($db->query("SELECT animal_name, picture, description, scientific_name, 
      genus_id, family_id, order_id, size_id, size_description, region, diet_id 
      FROM animals") as $row) {
        print 'Animal name: ' . $row['animal_name'] . '<br>';
        print '<img src=\'../project1Data/' . $row['picture'] . '\'<br>';
      }
    ?>
  </div>
</body>