-- Create Notes table: PK note-id, FK USER_id, fk conf_id, FK speaker_id, fk session_id, Notes
-- create user table: pk user_id, user_name
-- create conference table: pk conf_id, month, year
-- create speaker table: pk speaker_id, speaker_name, talk
-- create session table: pk session_id, fk conf_id, session_name
DROP TABLE if exists person cascade;
DROP TABLE if exists conference cascade;
DROP TABLE if exists speaker cascade;
DROP TABLE if exists session cascade;
DROP TABLE if exists notes cascade;


CREATE TABLE person (
    user_id VARCHAR(12),
    name VARCHAR(30),
    PRIMARY KEY (user_id)
);

CREATE TABLE conference (
    conf_id VARCHAR(12),
    month VARCHAR(12),
    year VARCHAR(12),
    PRIMARY KEY (conf_id)    
);

CREATE TABLE speaker (
    speaker_id VARCHAR(12),
    speaker_name VARCHAR(30),
    talk VARCHAR(50),
    PRIMARY KEY (speaker_id)
);

CREATE TABLE session(
    session_id VARCHAR(12),
    session_name VARCHAR(50),
    conf_id VARCHAR(12),
    PRIMARY KEY (session_id),
    FOREIGN KEY (conf_id) REFERENCES conference (conf_id)
);

CREATE TABLE notes (
    note_id VARCHAR(12),
    user_id VARCHAR(12),
    conf_id VARCHAR(12),
    speaker_id VARCHAR(12),
    session_id VARCHAR(12),
    notes VARCHAR(500),
    PRIMARY KEY (note_id),
    FOREIGN KEY (user_id) REFERENCES person (user_id),
    FOREIGN KEY (conf_id) REFERENCES conference (conf_id),
    FOREIGN KEY (speaker_id) REFERENCES speaker (speaker_id),
    FOREIGN KEY (session_id) REFERENCES session (session_id)
);
