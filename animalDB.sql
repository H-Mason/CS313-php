DROP TABLE if EXISTS animals;
DROP TABLE if EXISTS genus;
DROP TABLE if EXISTS size;
DROP TABLE if EXISTS a_order;
DROP TABLE if EXISTS family;
DROP TABLE if EXISTS region;
DROP TABLE if EXISTS a_order;
CREATE TABLE "animals" (
  "animal_id" SERIAL PRIMARY KEY,
  "animal_name" varchar(80),
  "picture" varchar(80),
  "details" varchar(500),
  "scientific_name" varchar(80),
  "genus_id" int,
  "order_id" int,
  "family_id" int,
  "size_id" int,
  "region_id" int
);

CREATE TABLE "genus" (
  "genus_id" SERIAL PRIMARY KEY,
  "genus" varchar(80)
);

CREATE TABLE "size" (
  "size_id" SERIAL PRIMARY KEY,
  "size" varchar(80)
);

CREATE TABLE "a_order" (
  "order_id" SERIAL PRIMARY KEY,
  "order" varchar(80)
);

CREATE TABLE "family" (
  "family_id" SERIAL PRIMARY KEY,
  "family" varchar(80)
);

CREATE TABLE "region" (
  "region_id" SERIAL PRIMARY KEY,
  "region" varchar(80)
);

ALTER TABLE "animals" ADD FOREIGN KEY ("genus_id") REFERENCES "genus" ("genus_id");

ALTER TABLE "animals" ADD FOREIGN KEY ("size_id") REFERENCES "size" ("size_id");

ALTER TABLE "animals" ADD FOREIGN KEY ("family_id") REFERENCES "family" ("family_id");

ALTER TABLE "animals" ADD FOREIGN KEY ("order_id") REFERENCES "a_order" ("order_id");

ALTER TABLE "animals" ADD FOREIGN KEY ("region_id") REFERENCES "region" ("region_id");
