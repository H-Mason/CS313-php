<?php
  require '../../db/dbConnect.php';
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
Something is here
<?php
  foreach ($db->query("SELECT animal_name FROM animals") as $row) {
    print 'Animal name: ' . $row['animal_name'];
  }
?>
</body>