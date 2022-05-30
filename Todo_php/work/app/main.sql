//Todoリストテーブルの作成
drop database if exists yamadashu2_main;
create database yamadashu2_main default character set utf8 collate utf8_general_ci;
grant all on yamadashu2_main.* to 'yamadashu2_date'@'localhost' identified by 'dbdatebase';
use yamadashu2_main;


CREATE TABLE todos(
  id int auto_increment,
 	user_id varchar(200) not null, 
  is_done BOOL DEFAULT false,
  title TEXT,
  PRIMARY KEY(id)
);


//ユーザーテーブルの作成(main)
create table users (
	id int auto_increment primary key, 
	name varchar(100) not null, 
	user_id varchar(200) not null, 
	password varchar(100) not null
);




//ユーザーテーブルの作成(sub)
create table users2 (
	id int auto_increment primary key, 
	name varchar(64) not null, 
  email varchar(191) unique,
  password varchar(191)
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