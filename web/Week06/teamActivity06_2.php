<?php
  require './dbConnect.php';
  $db = get_db();
  $book = $_POST['book'];
  $chapter = $_POST['chapter'];
  $verse = $_POST['verse'];
  $content = $_POST['content'];
  $topicsId = $_POST['topics'];

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
		echo "ScriptureId: $newId, topicId: $topicId";
		// Again, first prepare the statement
		$statement = $db->prepare('INSERT INTO topic_references(scripture_id, topic_id) VALUES(:scriptureId, :topicId)');
		// Then, bind the values
		$statement->bindValue(':scriptureId', $newId);
		$statement->bindValue(':topicId', $topicId);
		$statement->execute();
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
            foreach ($db->query("SELECT scripture.book AS book,
                                        scripture.chapter AS chapter, 
                                        scripture.verse AS verse, 
                                        scripture.content AS content, 
                                        topic.topic AS topic
                                FROM    scripture, topic, topic_references
                                WHERE   scripture.id = topic_references.scripture_id
                                    AND topic.id = topic_references.topic_id
                                    ORDER BY book") as $row)
        {
        echo 'book: ' . $row['book'];
        echo 'chapter: ' . $row['chapter'];
        echo 'verse: ' . $row['verse'];
        echo 'content: ' . $row['content'];
        echo 'topic: ' . $row['topic'];
        echo '<br/>';
        }
          }
          catch (PDOException $ex)
        {
            // Please be aware that you don't want to output the Exception message in
            // a production environment
            echo "Error connecting to DB. Details: $ex";
            die();
        }
        // foreach ($db->query("SELECT scripture.book AS book,
        //                             scripture.chapter AS chapter, 
        //                             scripture.verse AS verse, 
        //                             scripture.content AS content, 
        //                             topic.topic AS topic
        //                     FROM    scripture, topic, topicReferences
        //                     WHERE   scripture.id = topicReferences.scripture_id
        //                         AND topic.id = topicReferences.topic_id
        //                         ORDER BY book") as $row)
        // {
        // echo 'book: ' . $row['book'];
        // echo 'chapter: ' . $row['chapter'];
        // echo 'verse: ' . $row['verse'];
        // echo 'content: ' . $row['content'];
        // echo 'topic: ' . $row['topic'];
        // echo '<br/>';
        // }
    ?>
</body>