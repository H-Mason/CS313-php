-- Insert rows into table 'Genus'
INSERT INTO genus
( -- columns to insert data into
 genus
)
VALUES
( -- first row: values for the columns in the list above
 'Odocoileus'
),
(
 'Sciurus'
),
(
 'Canis'
),
(
 'Vulpes'
),
(
 'Mephitis'
),
(
 'Ursus'
);
-- Insert rows into table 'family'
INSERT INTO family
( -- columns to insert data into
 family
)
VALUES
( -- first row: values for the columns in the list above
 'Cervidae'
),
(
 'Sciuridae'
),
(
 'Canidae'
),
(
 'Mephitidae'
),
(
 'Ursidae'
);
-- Insert rows into table 'a_order'
INSERT INTO a_order
( -- columns to insert data into
 order_name
)
VALUES
( -- first row: values for the columns in the list above
 'Artiodactyla'
),
(
 'Rodentia'
),
(
 'Carnivora'
);

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
),
(
 'Insectivore'
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
),
(
 'Fox Squirrel', 'foxSquirrel.jpg', 'foxSquirrelDesc.txt', 'Niger',
 2, 2, 2, 2, 1, 'redFoxSizeDesc.txt', 'redFoxRegion.png'
),
(
 'Wolf', 'wolf.jpg', 'wolfDesc.txt', 'Lupus', 3, 3, 3, 3, 2,
 'wolfSizeDesc.txt', 'wolfRegion.png'
),
(
 'Red Fox', 'redFox.jpg', 'redFoxDesc.txt', 'Vulpes', 
 4, 3, 3, 2, 1, 'redFoxSizeDesc.txt', 'redFoxRegion.png'
),
(
 'Striped Skunk', 'stripedSkunk.jpg', 'stripedSkunkDesc.txt', 'Mephitis',
 5, 4, 3, 4, 1, 'stripedSkunkSizeDesc.txt', 'stripedSkunkRegion.jpg'
),
(
 'Black Bear', 'blackBear.jpg', 'blackBearDesc.txt', 'Americanus',
 6, 5, 3, 2, 3, 'blackBearSizeDesc.txt', 'blackBearRegion.png'
);





