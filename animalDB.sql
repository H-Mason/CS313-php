DROP TABLE if EXISTS animals CASCADE;
DROP TABLE if EXISTS genus CASCADE;
DROP TABLE if EXISTS size CASCADE;
DROP TABLE if EXISTS a_order CASCADE;
DROP TABLE if EXISTS family CASCADE;
DROP TABLE if EXISTS diet CASCADE;

CREATE TABLE "animals" (
  "animal_id" SERIAL PRIMARY KEY,
  "animal_name" varchar(30) UNIQUE,
  "picture" varchar(30),
  "description" varchar(50),
  "diet_id" int,
  "scientific_name" varchar(30),
  "genus_id" int,
  "order_id" int,
  "family_id" int,
  "size_id" int,
  "size_description" varchar(50),
  "region" varchar(30)
);

CREATE TABLE "genus" (
  "genus_id" SERIAL PRIMARY KEY,
  "genus" varchar(30)
);

CREATE TABLE "size" (
  "size_id" SERIAL PRIMARY KEY,
  "size" varchar(30)
);

CREATE TABLE "a_order" (
  "order_id" SERIAL PRIMARY KEY,
  "order_name" varchar(30)
);

CREATE TABLE "family" (
  "family_id" SERIAL PRIMARY KEY,
  "family" varchar(30)
);

CREATE TABLE "diet" (
  "diet_id" SERIAL PRIMARY KEY,
  "diet" varchar(30)
);

ALTER TABLE "animals" ADD FOREIGN KEY ("genus_id") REFERENCES "genus" ("genus_id");

ALTER TABLE "animals" ADD FOREIGN KEY ("size_id") REFERENCES "size" ("size_id");

ALTER TABLE "animals" ADD FOREIGN KEY ("family_id") REFERENCES "family" ("family_id");

ALTER TABLE "animals" ADD FOREIGN KEY ("order_id") REFERENCES "a_order" ("order_id");

ALTER TABLE "animals" ADD FOREIGN KEY ("diet_id") REFERENCES "diet" ("diet_id");
