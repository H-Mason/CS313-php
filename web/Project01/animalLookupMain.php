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
  <!-- <ul class='directory'> -->
    <form action="animalLookup.php" method="post">
      <input type="submit" name="all" class="directory" value="All Animals By Name">
    </form>
  <!-- </ul> -->
  <ul>
      <li>
        <form action="animalUserSearch.php" method="post">
          <input type="submit" name="byName" class="directory" value="Find Animal by Name">
        </form>
      </li>
      <li>
        <form action="animalUserSearch.php" method="post">
          <input type="submit" name="bySize" class="directory" value="Find Animals of Similar Size">
        </form>
      </li>
      <li>
        <form action="animalUserSearch.php" method="post">
          <input type="submit" name="byGenus" class="directory" value="Find Animals by Genus">
        </form>
      </li>
      <li>
        <form action="animalUserSearch.php" method="post">
          <input type="submit" name="byFamily" class="directory" value="Find Animals by Family">
        </form>
      </li>
      <li>
        <form action="animalUserSearch.php" method="post">
          <input type="submit" name="byOrder" class="directory" value="Find Animals by Order">
        </form>
      </li>
      <li>
        <form action="animalUserSearch.php" method="post">
          <input type="submit" name="byDiet" class="directory" value="Find Animals by Primary Diet">
        </form>
      </li>
      
    </ul>
    <br>
    <?php
      print("<a href='addNewAnimal.php'><ul class='directory'>Add Animal to Database</ul></a>");
    ?>
    </div>
</body>