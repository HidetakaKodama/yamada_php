<?php session_start(); ?>
<?php

$userId = $_POST['user_id'];

unset($_SESSION['users']);
$pdo = new PDO(
	'mysql:host=localhost;dbname=yamadashu2_main;charset=utf8',
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
	header('Location: http://localhost/php/Todo_php/work/public/');
} else {
	header('Location: http://localhost/php/login_main/login/login-input.php');
	$alert = "<script type='text/javascript'>alert('ログイン名またはパスワードが違います。');</script>";
	echo $alert;
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
</head>

<body>
	</script>
	<form name="frmRegist" action="../../Todo_php/work/app/functions.php" method="POST">
		<input type="hidden" name="user_id" value="<?php echo $userId; ?>">
	</form>
</body>

</html>