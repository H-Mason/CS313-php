<?php
  require '../../db/dbConnect.php';
  $db = get_db();
  $name = $_POST['byName'];
  $size;
  $genus;
  $family;
  $order;
  $diet;
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
</body>