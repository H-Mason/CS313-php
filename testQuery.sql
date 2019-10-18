SELECT animals.animal_name,
           animals.picture,
           animals.description,
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
    where  animals.animal_name = 'Mule Deer';

SELECT animals.animal_name,
       animals.size_description,
       size.size AS size
FROM   animals
JOIN   size on size.size_id = animals.size_id
WHERE  size.size = 'Large';