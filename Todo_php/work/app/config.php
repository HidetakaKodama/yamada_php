<?php
session_start();

//Docker 
#define('DSN', 'mysql:host=db;dbname=myapp;charset=utf8mb4');
#define('DB_USER', 'myappuser');
#define('DB_PASS', 'myapppass');
#define('SITE_URL', 'http://localhost:8700');

//データベース
define('DSN', 'mysql:host=mysql1.php.xdomain.ne.jp;dbname=yamadashu2_main');
define('DB_USER', 'yamadashu2_date');
define('DB_PASS', 'dbdatebase');
define('SITE_URL', 'http://yamadashu2.php.xdomain.jp/Todo_php/Todo_php/work/public/');

//テストデータベース
// define('DSN', 'mysql:host=localhost;dbname=yamadashu2_main;charset=utf8mb4');
// define('DB_USER', 'yamadashu2_date');
// define('DB_PASS', 'dbdatebase');
// define('SITE_URL', 'http://localhost/php/Todo_php/work/public/');

require_once(__DIR__ . '/functions.php');
