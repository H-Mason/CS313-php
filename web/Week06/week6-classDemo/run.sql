-- DROP
DROP TABLE note;
DROP TABLE course;

-- CREATE
CREATE TABLE course
(
	id     SERIAL      PRIMARY KEY NOT NULL,
	name   VARCHAR(80)             NOT NULL,
	number VARCHAR(10)             NOT NULL UNIQUE
);

CREATE TABLE note
(
   id        SERIAL PRIMARY KEY NOT NULL,
   course_id INT                NOT NULL REFERENCES course(id),
   title     TEXT               NOT NULL,
   content   TEXT               NOT NULL,
   date      DATE               NOT NULL,
   time      TEXT               NOT NULL
);

-- INSERT
INSERT INTO course(name, number) VALUES ('Web Engineering II', 'CS 313');
INSERT INTO course(name, number) VALUES ('Object-oriented Programming', 'CS 165');

-- QUERY
\i query.sql