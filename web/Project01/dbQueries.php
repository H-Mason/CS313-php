<?php
require '../../db/dbConnect.php';
$db = get_db();
function getAnimal($animalName) {
    SELECT animals.animal_name,
           animals.picture,
           animals.description,
           genus.genus AS "genus",
           family.family AS "family",
           a_order.order_name AS "order",
           size.size AS "size",
           animals.size_description,
           animals.region,
           diet.diet AS "diet"
    FROM   animals
    JOIN   genus ON genus.genus_id = animals.genus_id
    JOIN   family ON family.family_id = animals.family_id 
    JOIN   a_order ON a_order.order_id = animals.order_id
    JOIN   size ON size.size_id = animals.size_id
    JOIN   diet ON diet.diet_id = animals.diet_id;





    $stmt = $db->qury("SELECT *
    from animals
    INNER JOIN genus 
    ON genus.genus=animals.genus_id
    WHERE genus.genus_id=1");
    $stmt->execute();
    
}





?>