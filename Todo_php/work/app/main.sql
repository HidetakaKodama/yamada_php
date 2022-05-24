//Todoリストテーブルの作成
CREATE TABLE todos(
  id INT AUTO_INCREMENT,
  is_done BOOL DEFAULT false,
  title TEXT,
  PRIMARY KEY(id)
);


//ユーザーテーブルの作成
create table users (
	id int auto_increment primary key, 
	name varchar(100) not null, 
	user_id varchar(200) not null, 
	password varchar(100) not null
);

//例の値を挿入
INSERT INTO todos (title) VALUES('Meeting');
INSERT INTO todos
  (title,is_done)
VALUES('Start Work',true);
INSERT INTO todos
  (title)
VALUES('Clean the room');

SELECT * FROM todos;