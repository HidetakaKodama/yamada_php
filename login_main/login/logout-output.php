<?php session_start(); ?>
<?php
if (isset($_SESSION['users'])) {
	unset($_SESSION['users']);
	//echo 'ログアウトしました。';
	if (isset($_COOKIE['user_id'])) {
		//echo "<script type='text/javascript'>alert('" . $_COOKIE['user_id'] . "');</script>";
		setcookie('user_id', '', (time() - 3600), '/');
	} else {
		echo "<script type='text/javascript'>alert('');</script>";
	}
	header('Location: http://yamadashu2.php.xdomain.jp/login_main/login/login-input.php');
} else {
	//echo 'すでにログアウトしています。';
	header('Location: http://yamadashu2.php.xdomain.jp/login_main/login/login-input.php');
}
?>

