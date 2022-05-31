<?php session_start(); ?>
<?php
if (isset($_SESSION['users'])) {
	unset($_SESSION['users']);
	//echo 'ログアウトしました。';
	header('Location: http://yamadashu2.php.xdomain.jp/login_main/login/login-input.php');
	if (isset($_COOKIE['user_id'])) {
		//echo "<script type='text/javascript'>alert('" . $_COOKIE['user_id'] . "');</script>";
		setcookie($_COOKIE['user_id'], '', (time() - 3600), '/');
	} else {
		echo "<script type='text/javascript'>alert('あ');</script>";
	}
} else {
	//echo 'すでにログアウトしています。';
	header('Location: http://yamadashu2.php.xdomain.jp/login_main/login/login-input.php');
}
?>

