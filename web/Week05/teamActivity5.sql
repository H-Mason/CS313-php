DROP TABLE if EXISTS "scripture" CASCADE;

CREATE TABLE "scripture" (
  "id" SERIAL PRIMARY KEY,
  "book" varchar,
  "chapter" int,
  "verse" int,
  "content" varchar
);

INSERT INTO scripture (id, book, chapter, verse, content) VALUES ('1','John','1','5','And the alight shineth in bdarkness; and the darkness ccomprehended it not.');
INSERT INTO scripture (id, book, chapter, verse, content) VALUES ('2','D&C','88','49','The alight shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall bcomprehend even God, being quickened in him and by him.');
INSERT INTO scripture (id, book, chapter, verse, content) VALUES ('3','D&C','93','28','He that akeepeth his commandments receiveth btruth and clight, until he is glorified in truth and dknoweth all things.');
INSERT INTO scripture (id, book, chapter, verse, content) VALUES ('4','Mosiah','16','9','He is the alight and the life of the world; yea, a light that is endless, that can never be darkened; yea, and also a life which is endless, that there can be no more death.');
