INSERT INTO conference (conf_id, month, year)
VALUES 
     ('1','October','2019'); 

INSERT INTO session (session_id, session_name, conf_id)
VALUES
    ('1', 'Saturday Morning', '1');

INSERT INTO person (user_id, name)
VALUES
    ('1', 'random Name');
    
INSERT INTO person (user_id, name)
VALUES
    ('2', 'Unique Name');

INSERT INTO speaker (speaker_id, speaker_name, talk)
VALUES 
     ('1','Neil L Anderson','The Prophet of God');
     
INSERT INTO speaker (speaker_id, speaker_name, talk)
VALUES 
     ('2','M Russell Ballard','Precious Gifts from God');
     
INSERT INTO speaker (speaker_id, speaker_name, talk)
VALUES 
     ('3','Brian K Taylor','Am I a Child Of God?');

           

INSERT INTO notes (note_id, user_id, conf_id, speaker_id, session_id, notes)
VALUES
    ('1', '1', '1', '1', '1','It was superb');

INSERT INTO notes (note_id, user_id, conf_id, speaker_id, session_id, notes)
VALUES
    ('2', '1', '1', '2', '1','It was divine');

INSERT INTO notes (note_id, user_id, conf_id, speaker_id, session_id, notes)
VALUES
    ('3', '1', '1', '3', '1','It was awesome');

INSERT INTO notes (note_id, user_id, conf_id, speaker_id, session_id, notes)
VALUES
    ('4', '2', '1', '1', '1','It was superb');

INSERT INTO notes (note_id, user_id, conf_id, speaker_id, session_id, notes)
VALUES
    ('5', '2', '1', '2', '1','It was divine');

INSERT INTO notes (note_id, user_id, conf_id, speaker_id, session_id, notes)
VALUES
    ('6', '2', '1', '3', '1','It was awesome');