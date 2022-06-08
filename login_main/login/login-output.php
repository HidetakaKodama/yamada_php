<?php session_start(); ?>
<?php

$userId = $_POST['user_id'];

unset($_SESSION['users']);
$pdo = new PDO(
	'mysql:host=mysql1.php.xdomain.ne.jp;dbname=yamadashu2_main;charset=utf8',
	'yamadashu2_date',
	'dbdatebase'
);
$sql = $pdo->prepare('select * from users where user_id=? and password=?');
$sql->execute([$_REQUEST['user_id'], $_REQUEST['password']]);
foreach ($sql as $row) {
	$_SESSION['users'] = [
		'id' => $row['id'],
		'name' => $row['name'],
		'user_id' => $row['user_id'],
		'password' => $row['password'],
	];
}
if (isset($_SESSION['users'])) {
	// echo 'いらっしゃいませ、', $_SESSION['users']['name'], 'さん。';
	setcookie('user_id', $userId, (time() + 60 * 60 * 6), '/');

	header('Location: http://yamadashu2.php.xdomain.jp/Todo_php/work/public/');
} else {
	$alert = "<script type='text/javascript'>alert('ログイン名またはパスワードが違います。');</script>";
	echo $alert;
	header('Location: http://yamadashu2.php.xdomain.jp/login_main/login/login-input.php');
}

?>
