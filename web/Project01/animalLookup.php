<?php
  require '../../db/dbConnect.php';
  $db = get_db();
  $input = $_POST['input'];
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
        if (isset($_POST['all'])) {
            foreach ($db->query("SELECT animal_name
                                 FROM   animals") as $row) 
            {
                print("<form><p name='input' value='" . $row['animal_name'] . "'><input type='submit' name='byName' class='directory' value='" . $row['animal_name'] . "'></form>");
            }
        }
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
                            WHERE  animals.animal_name = '$input'") as $row) 
            {
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
        }
        if (isset($_POST['bySize'])) {
            print("<h3>" . $input . " Animals</h3>");
            foreach ($db->query("SELECT animals.animal_name,
                                    animals.size_description,
                                    size.size AS size
                            FROM   animals
                            JOIN   size on size.size_id = animals.size_id
                            WHERE  size.size = '$input'") as $row) {
                print('Animal name: ' . $row['animal_name'] . '<br>');
                $descFile = '../project1Data/' . $row['size_description'];
                $desc = fopen($descFile, "r") or die("Unable to open file!");
                print('<div class=\'desc\'>' . fread($desc,filesize($descFile)) . '</div><br>');
                fclose($desc);
            }
        }
        if (isset($_POST['byGenus'])) {
            print("<h3>" . $input . "</h3>");
            foreach ($db->query("SELECT animals.animal_name,
                                    animals.description,
                                    genus.genus AS genus,
                                    family.family AS family,
                                    a_order.order_name AS a_order
                                FROM   animals
                                JOIN   genus ON genus.genus_id = animals.genus_id
                                JOIN   family ON family.family_id = animals.family_id
                                JOIN   a_order ON a_order. order_id = animals.order_id
                                WHERE  genus.genus = '$input'") as $row) {
                print('Animal name: ' . $row['animal_name'] . '<br>');
                print('Family: ' . $row['family'] . '<br>');
                print('Order: ' . $row['a_order'] . '<br>');
                $descFile = '../project1Data/' . $row['description'];
                $desc = fopen($descFile, "r") or die("Unable to open file!");
                print('<div class=\'desc\'>' . fread($desc,filesize($descFile)) . '</div><br>');
                fclose($desc);
            }
        }
        if (isset($_POST['byFamily'])) {
            print("<h3>" . $input . "</h3>");
            foreach ($db->query("SELECT animals.animal_name,
                                    animals.description,
                                    family.family AS family,
                                    a_order.order_name AS a_order
                                FROM   animals
                                JOIN   family ON family.family_id = animals.family_id
                                JOIN   a_order ON a_order. order_id = animals.order_id
                                WHERE  family.family = '$input'") as $row) {
                print('Animal name: ' . $row['animal_name'] . '<br>');
                print('Order: ' . $row['a_order'] . '<br>');
                $descFile = '../project1Data/' . $row['description'];
                $desc = fopen($descFile, "r") or die("Unable to open file!");
                print('<div class=\'desc\'>' . fread($desc,filesize($descFile)) . '</div><br>');
                fclose($desc);
            }
        }
        if (isset($_POST['byOrder'])) {
            print("<h3>" . $input . "</h3>");
            foreach ($db->query("SELECT animals.animal_name,
                                    animals.description,
                                    a_order.order_name AS a_order
                                FROM   animals
                                JOIN   a_order ON a_order. order_id = animals.order_id
                                WHERE  a_order.order_name = '$input'") as $row) {
                print('Animal name: ' . $row['animal_name'] . '<br>');
                $descFile = '../project1Data/' . $row['description'];
                $desc = fopen($descFile, "r") or die("Unable to open file!");
                print('<div class=\'desc\'>' . fread($desc,filesize($descFile)) . '</div><br>');
                fclose($desc);
            }
        }
        if (isset($_POST['byDiet'])) {
            print("<h3>" . $input . "s</h3>");
            foreach ($db->query("SELECT animals.animal_name,
                                    animals.description,
                                    diet.diet AS diet
                            FROM   animals
                            JOIN   diet ON diet.diet_id = animals.diet_id
                            WHERE  diet.diet = '$input'") as $row) {
                print('Animal name: ' . $row['animal_name'] . '<br>');
                $descFile = '../project1Data/' . $row['description'];
                $desc = fopen($descFile, "r") or die("Unable to open file!");
                print('<div class=\'desc\'>' . fread($desc,filesize($descFile)) . '</div><br>');
                fclose($desc);
            }
        }
        print("<a href='addNewAnimal.php'><ul class='directory'>Add Animal to Database</ul></a>");
        print("<a href='animalLookupMain.php'><ul class='directory'>Return Home</ul></a>");
    ?>
  </div>
</body>