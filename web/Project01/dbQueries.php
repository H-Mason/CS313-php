<?php
require '../../db/dbConnect.php';
$db = get_db();
function getGenus($animalName) {
    $stmt = $db->prepare("SELECT *
    from animals
    INNER JOIN genus 
    ON genus.genus=animals.genus_id
    WHERE genus.genus_id=1");
    $stmt->execute();
    
}





?>