<?php
  require './dbConnect.php';
  $db = get_db();
  $book = $_POST['book'];
  $chapter = $_POST['chapter'];
  $verse = $_POST['verse'];
  $content = $_POST['content'];
  $topic = $_POST['topic'];

  $stmt = $db->prepare('INSERT INTO scripture (book, chapter, verse, content) 
                        VALUES (:book, :chapter, :verse, :content);');
  $stmt->bindValue(':book', $book, PDO::PARAM_STR);
  $stmt->bindValue(':chapter', $chapter, PDO::PARAM_STR);
  $stmt->bindValue(':verse', $verse, PDO::PARAM_STR);
  $stmt->bindValue(':content', $content, PDO::PARAM_STR);
  $stmt->execute();

  $newId = $pdo->lastInsertId('scripture_id_seq');
  $stmt = $db->prepare('INSERT INTO topicReference (scripture_id, topic_id) 
                        VALUES (:newId, "SELECT topic_id
                                         FROM   topic
                                WHERE  topic.topic = :topic")');
  $stmt->bindValue(':newId', $newID, PDO::PARAM_INT);
  $stmt->bindValue(':topic', $topic, PDO::PARAM_STR);
  $stmt->execute();
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Scriptures</title>
</head>
<body>
    <h1>View Scriptures</h1>
    <?php
        foreach ($db->query("SELECT scripture.book AS book,
                                    scripture.chapter AS chapter, 
                                    scripture.verse AS verse, 
                                    scripture.content AS content, 
                                    topic.topic AS topic
                            FROM    scripture, topic, topicReference
                            WHERE   scripture.id = topicReference.scripture_id
                                AND topic.id = topicReference.topic_id
                                ORDER BY book") as $row)
        {
        echo 'book: ' . $row['book'];
        echo 'chapter: ' . $row['chapter'];
        echo 'verse: ' . $row['verse'];
        echo 'content: ' . $row['content'];
        echo 'topic: ' . $row['topic'];
        echo '<br/>';
        }
    ?>
</body>