-- Development data insertion
-- Thu Oct 21 18:12:54 2021
-- Version: 1.0

--  ----------------- Types insertion ----------------- --

INSERT INTO looper.types (name) VALUES ("Single line text");
INSERT INTO looper.types (name) VALUES ("List of single lines");
INSERT INTO looper.types (name) VALUES ("Multi-line text");

--  ----------------- Status insertion ----------------- --

INSERT INTO looper.status (name) VALUES ("Building");
INSERT INTO looper.status (name) VALUES ("Answering");
INSERT INTO looper.status (name) VALUES ("Closed");

--  ----------------- Exercise insertion ----------------- --

INSERT INTO looper.exercises (title, status_id) VALUES ("Exercice 2 - Histoire", 1);
INSERT INTO looper.exercises (title, status_id) VALUES ("Exercice 1 - Art et littérature", 1);
INSERT INTO looper.exercises (title, status_id) VALUES ("Exercice 3 - Géographie", 1);

--  ----------------- Questions insertion ----------------- --

INSERT INTO looper.questions (text, exercise_id, type_id) VALUES ("Quand l'ONU a-t-elle été créée ?",1,1);
INSERT INTO looper.questions (text, exercise_id, type_id) VALUES ("Qui a été le premier président des États-Unis?",1,1);
INSERT INTO looper.questions (text, exercise_id, type_id) VALUES ("Qui a peint la Chapelle Sixtine ?",2,1);
INSERT INTO looper.questions (text, exercise_id, type_id) VALUES ("Où est née Arya Stark, de la saga Le Trône de Fer ?",2,1);
INSERT INTO looper.questions (text, exercise_id, type_id) VALUES ("Qui est l'auteur de l'Ode à Aphrodite ?" ,2,1);
INSERT INTO looper.questions (text, exercise_id, type_id) VALUES ("Où se trouve la péninsule du Yucatan ?",3,1);
INSERT INTO looper.questions (text, exercise_id, type_id) VALUES ("Quelle est la capitale de l'Albanie ?",3,1);
INSERT INTO looper.questions (text, exercise_id, type_id) VALUES ("Dans quel océan se trouve le Sri Lanka ?",3,1);

--  ----------------- Users insertion ----------------- --

INSERT INTO looper.users (name) VALUES ("2020-09-15 09:57:08 UTC");
INSERT INTO looper.users (name) VALUES ("2020-10-26 13:57:22 UTC");
INSERT INTO looper.users (name) VALUES ("2020-09-15 09:57:08 UTC");
INSERT INTO looper.users (name) VALUES ("2020-10-29 12:36:32 UTC");
INSERT INTO looper.users (name) VALUES ("2020-12-18 12:41:45 UTC");

--  ----------------- Answers insertion ----------------- --

INSERT INTO looper.answers (question_id, user_id, answer) VALUES (1,1,"24 octobre 1945");
INSERT INTO looper.answers (question_id, user_id, answer) VALUES (1,2,"1 novembre 1993");
INSERT INTO looper.answers (question_id, user_id, answer) VALUES (4,3,"Winterfell ");
INSERT INTO looper.answers (question_id, user_id, answer) VALUES (7,4,"Tirana");
INSERT INTO looper.answers (question_id, user_id, answer) VALUES (7,2,"Pristina");
INSERT INTO looper.answers (question_id, user_id, answer) VALUES (8,3,"Pacifique");
INSERT INTO looper.answers (question_id, user_id, answer) VALUES (3,5," Michel-Ange ");