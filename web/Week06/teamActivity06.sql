
DROP TABLE if EXISTS "scripture" CASCADE;
DROP TABLE if EXISTS "topic" CASCADE;
DROP TABLE if EXISTS "topic_references" CASCADE;

CREATE TABLE "scripture" (
  "id" SERIAL PRIMARY KEY,
  "book" varchar,
  "chapter" int,
  "verse" int,
  "content" varchar
);

CREATE TABLE "topic" (
    "id" serial primary key,
    "topic" varchar(30)
);

CREATE TABLE "topic_references" (
    "id" serial PRIMARY KEY,
    "scripture_id" int,
    "topic_id" int
);

ALTER TABLE "topic_references" ADD FOREIGN KEY ("scripture_id") REFERENCES "scripture" ("id");
ALTER TABLE "topic_references" ADD FOREIGN KEY ("topic_id") REFERENCES "topic" ("id");

INSERT INTO topic (topic) VALUES ('Faith'), ('Sacrifice'), ('Charity');
