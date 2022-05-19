CREATE TABLE todos(
  id INT NOT NULL AUTO_INCREMENT,
  is_done BOOL DEFAULT false,
  title TEXT,
  PRIMARY KEY (id)
);

INSERT INTO todos (title) VALUES('Meeting');
INSERT INTO todos
  (title,is_done)
VALUES('Start Work',true);
INSERT INTO todos
  (title)
VALUES('Clean the room');

SELECT * FROM todos;
