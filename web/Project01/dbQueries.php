<?php
require '../../db/dbConnect.php';
$db = get_db();
function getOneAnimal($animalName) {
    $stmt = $db->prepare("SELECT *
    ");
    $stmt->execute();
    
}





?>