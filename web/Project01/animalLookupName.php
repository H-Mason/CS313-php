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
  
  <?php
    foreach ($db->query("SELECT animal_name FROM animals WHERE size_id='3'") as $row) {
      print 'Animal name: ' . $row['animal_name'];
    }
  ?>
</body>