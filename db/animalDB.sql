DROP TABLE if EXISTS animals cascade;
DROP TABLE if EXISTS genus;
DROP TABLE if EXISTS size;
DROP TABLE if EXISTS a_order;
DROP TABLE if EXISTS family;
CREATE TABLE "animals" (
  "animal_id" SERIAL PRIMARY KEY,
  "animal_name" varchar,
  "picture" varchar,
  "details" varchar,
  "scientific_name" varchar,
  "genus_id" int,
  "order_id" int,
  "family_id" int,
  "size_id" int
);

CREATE TABLE "genus" (
  "genus_id" SERIAL PRIMARY KEY,
  "genus" varchar
);

CREATE TABLE "size" (
  "size_id" SERIAL PRIMARY KEY,
  "size" varchar
);

CREATE TABLE "a_order" (
  "order_id" SERIAL PRIMARY KEY,
  "order" varchar
);

CREATE TABLE "family" (
  "family_id" SERIAL PRIMARY KEY,
  "family" varchar
);

ALTER TABLE "animals" ADD FOREIGN KEY ("genus_id") REFERENCES "genus" ("genus_id");

ALTER TABLE "animals" ADD FOREIGN KEY ("size_id") REFERENCES "size" ("size_id");

ALTER TABLE "animals" ADD FOREIGN KEY ("family_id") REFERENCES "family" ("family_id");

ALTER TABLE "animals" ADD FOREIGN KEY ("order_id") REFERENCES "a_order" ("order_id");
