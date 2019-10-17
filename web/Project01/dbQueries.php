<?php
require '../../db/dbConnect.php';
$db = get_db();
function getOneAnimal($animalName) {
    $stmt = $db->prepare("SELECT *
    from animals
    INNER JOIN genus 
    ON genus.genus_id=animals.genus.id
    WHERE animal_name = $animalname");
    $stmt->execute();
    
}





?>