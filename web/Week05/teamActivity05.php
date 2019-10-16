<?php
  require './dbConnect.php';
  $db = get_db();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Scriptures</title>
</head>
<body>
    <h1>Scripture Resources</h1>
    <?php

    foreach ($db->query("SELECT book, chapter, verse, content FROM scripture") as $row)
    {
      echo 'book: ' . $row['book'];
      echo ' chapter: ' . $row['chapter'];
      echo 'verse: ' . $row['verse'];
      echo ' content: ' . $row['content'];
      echo '<br/>';
    }
?>

</body>