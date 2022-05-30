<?php session_start(); ?>
<?php
if (isset($_SESSION['users'])) {
	unset($_SESSION['users']);
	//echo 'ログアウトしました。';
	header('Location: http://localhost/php/login_main/login/login-input.php');
} else {
	//echo 'すでにログアウトしています。';
	header('Location: http://localhost/php/login_main/login/login-input.php');
}
?>

