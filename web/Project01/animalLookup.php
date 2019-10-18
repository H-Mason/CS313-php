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
    <?php
        if (isset($_POST['byName'])) {
            foreach ($db->query("SELECT animals.animal_name,
                                  animals.picture,
                                  animals.description,
                                  animals.scientific_name,
                                  genus.genus AS genus,
                                  family.family AS family,
                                  a_order.order_name AS a_order,
                                  size.size AS size,
                                  animals.size_description,
                                  animals.region,
                                  diet.diet AS diet
                            FROM   animals
                            JOIN   genus ON genus.genus_id = animals.genus_id
                            JOIN   family ON family.family_id = animals.family_id 
                            JOIN   a_order ON a_order.order_id = animals.order_id
                            JOIN   size ON size.size_id = animals.size_id
                            JOIN   diet ON diet.diet_id = animals.diet_id
                            WHERE  animals.animal_name = 'Mule Deer'") as $row) 
            {
                if ($row != NULL) {
                    print('Animal name: ' . $row['animal_name'] . '<br>');
                    print('Species: ' . $row['scientific_name'] . '<br>');
                    print('Genus: ' . $row['genus'] . '<br>');
                    print('Family: ' . $row['family'] . '<br>');
                    print('Order: ' . $row['a_order'] . '<br>');
                    print('Diet: ' . $row['diet'] . '<br>');
                    print('Size: ' . $row['size'] . '<br>');
                    print('<img src=\'../project1Data/' . $row['picture'] . '\'<br>');
                    $descFile = '../project1Data/' . $row['description'];
                    $desc = fopen($descFile, "r") or die("Unable to open file!");
                    print('<div class=\'desc\'>' . fread($desc,filesize($descFile)) . '</div><br>');
                    fclose($desc);
                    $descFile = '../project1Data/' . $row['size_description'];
                    $desc = fopen($descFile, "r") or die("Unable to open file!");
                    print('<div class=\'desc\'>' . fread($desc,filesize($descFile)) . '</div><br>');
                    fclose($desc);
                    print('<img src=\'../project1Data/' . $row['region'] . '\'<br>'); 
                }
                else {
                    print("No animals found")
                }
            }
        }
        if (isset($_POST['bySize'])) {
            
        }
        if (isset($_POST['byGenus'])) {
            
        }
        if (isset($_POST['byFamily'])) {
            
        }
        if (isset($_POST['byOrder'])) {
            
        }
        if (isset($_POST['byDiet'])) {
            
        }
    ?>
  </div>
</body>