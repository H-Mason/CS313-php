<?php
  require './dbConnect.php';
  $db = get_db();
  $book = $_POST['book'];
  $chapter = $_POST['chapter'];
  $verse = $_POST['verse'];
  $content = $_POST['content'];
  $topicsId = $_POST['topics'];
  $newTopicCh = $_POST['newTopicCh'];

  $stmt = $db->prepare('INSERT INTO scripture (book, chapter, verse, content) 
                        VALUES (:book, :chapter, :verse, :content)');
  $stmt->bindValue(':book', $book, PDO::PARAM_STR);
  $stmt->bindValue(':chapter', $chapter, PDO::PARAM_INT);
  $stmt->bindValue(':verse', $verse, PDO::PARAM_INT);
  $stmt->bindValue(':content', $content, PDO::PARAM_STR);
  $stmt->execute();

  $newId = $db->lastInsertId('scripture_id_seq');
  try {
    
    foreach ($topicsId as $topicId)
    {
        $statement = $db->prepare('INSERT INTO topic_references(scripture_id, topic_id) 
                                    VALUES(:scriptureId, :topicId)');
        $statement->bindValue(':scriptureId', $newId);
        $statement->bindValue(':topicId', $topicId);
        $statement->execute();
    }   
  }
  catch (PDOException $ex)
    {
        echo "Error connecting to DB. Details: $ex";
        die();
    }
    if (isset($newTopicCh))
    {
        try
        {
            $newTopic = $_POST['newTopic'];
            $stmt = $db->prepare('INSERT INTO topic (topic) 
                                  VALUES(:topic)');
            $stmt->bindValue(':topic', $newTopic);
            $stmt->execute();
            
            $newTopicId = $db->lastInsertId('topic_id_seq');
            $statement = $db->prepare('INSERT INTO topic_references(scripture_id, topic_id) 
                                           VALUES(:scriptureId, :topicId)');
                // Then, bind the values
                $statement->bindValue(':scriptureId', $newId);
                $statement->bindValue(':topicId', $newTopicId);
                $statement->execute();
        }
        catch (PDOException $ex)
        {
            echo "Error connecting to DB. Details: $ex";
            die();
        }   
    }
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
        try {
        //     foreach ($db->query("SELECT scripture.book AS book,
        //                                 scripture.chapter AS chapter, 
        //                                 scripture.verse AS verse, 
        //                                 scripture.content AS content, 
        //                                 topic.topic AS topic,
        //                                 scripture.id AS id
        //                         FROM    scripture, topic, topic_references
        //                         WHERE   scripture.id = topic_references.scripture_id
        //                             AND topic.id = topic_references.topic_id
        //                             ORDER BY book") as $row)
        // {
        //     echo 'Book: ' . $row['book'] . '<br>';
        //     echo 'Chapter: ' . $row['chapter'] . '<br>';
        //     echo 'Verse: ' . $row['verse'] . '<br>';
        //     echo 'Content: ' . $row['content'] . '<br>';
        //     echo 'Topics: '; 
        $statement = $db->prepare('SELECT id, book, chapter, verse, content FROM scripture');
        $statement->execute();
        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	    {
            echo '<p>';
            echo '<strong>' . $row['book'] . ' ' . $row['chapter'] . ':';
            echo $row['verse'] . '</strong>' . ' - ' . $row['content'];
            echo '<br />';
            echo 'Topics: ';

            $stmtTopics = $db->prepare('SELECT topic FROM topic t'
                . ' INNER JOIN topic_references st ON st.topic_id = t.id'
                . ' WHERE st.scripture_id = :scriptureId');
            $stmtTopics->bindValue(':scriptureId', $row['id']);
            $stmtTopics->execute();
            // Go through each topic in the result
            while ($topicRow = $stmtTopics->fetch(PDO::FETCH_ASSOC))
            {
                echo $topicRow['topic'] . ' ';
            }
        echo '</p><br><br>';
        }
          }
          catch (PDOException $ex)
        {
            // Please be aware that you don't want to output the Exception message in
            // a production environment
            echo "Error connecting to DB. Details: $ex";
            die();
        }
    ?>
</body>