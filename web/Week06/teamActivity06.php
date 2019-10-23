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
    <h1>Enter Scriptures</h1>

    <form id="scriptureEntry" action="teamActivity06_2.php" method="POST">
        Book: <input type="text" name="book"><br>
        Chapter: <input type="text" name="chapter"><br>
        Verse: <input type="text" name="verse"><br>
        Content: <input type="textarea" name="content"><br>
        Topic: 
        <?php
            foreach ($db->query("SELECT id, topic FROM topic") as $row)
            {
                print("<input type='checkbox' name='topics[]' 
                id='topics" . $row['id'] . "' value ='" . $row['id'] . "'>" . $row['topic']);
            }
        ?>
        <input type="submit" value="Add to Database">
    </form>

</body>