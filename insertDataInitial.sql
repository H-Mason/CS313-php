-- Insert rows into table 'Genus'
INSERT INTO genus
( -- columns to insert data into
 genus
)
VALUES
( -- first row: values for the columns in the list above
 'Odocoileus'
);

-- ( -- second row: values for the columns in the list above
--  Column1_Value, Column2_Value, Column3_Value
-- )
-- add more rows here
-- Insert rows into table 'Genus'
INSERT INTO family
( -- columns to insert data into
 family
)
VALUES
( -- first row: values for the columns in the list above
 'Cervidae'
);
-- ( -- second row: values for the columns in the list above
--  Column1_Value, Column2_Value, Column3_Value
-- )
-- add more rows here
-- Insert rows into table 'Genus'
INSERT INTO a_order
( -- columns to insert data into
 order_name
)
VALUES
( -- first row: values for the columns in the list above
 'Artiodactyla'
);
-- ( -- second row: values for the columns in the list above
--  Column1_Value, Column2_Value, Column3_Value
-- )
-- add more rows here
INSERT INTO size
( -- columns to insert data into
 size
)
VALUES
( -- first row: values for the columns in the list above
 'Small'
),
( -- second row: values for the columns in the list above
 'Medium'
),
(
 'Large'
);

INSERT INTO diet
( -- columns to insert data into
 diet
)
VALUES
( -- first row: values for the columns in the list above
 'Herbivore'
),
( -- second row: values for the columns in the list above
 'Omnivore'
),
(
 'Carnivore'
);

INSERT INTO animals
( -- columns to insert data into
 animal_name, picture, description, scientific_name, genus_id, 
 family_id, order_id, diet_id, size_id, size_description, region
)
VALUES
( -- first row: values for the columns in the list above
 'Mule Deer', 'muleDeer.jpg', 'muleDeerDesc.txt', 'Hemionus', 
 1, 1, 1, 1, 3, 'muleDeerSizeDesc.txt', 'muleDeerRegion.png'
),
(
 'Whitetail Deer', 'whitetail.jpg', 'whitetailDesc.txt', 'Virginianus', 
 1, 1, 1, 1, 3, 'whitetailSizeDesc.txt', 'whitetailRegion.png'
);
-- ( -- second row: values for the columns in the list above
--  Column1_Value, Column2_Value, Column3_Value
-- )
-- add more rows here




