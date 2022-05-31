<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>サインアップ</title>
</head>
<?php
$name = $user_id = $password = '';
if (isset($_SESSION['users'])) {
    $name = $_SESSION['users']['name'];
    $user_id = $_SESSION['users']['user_id'];
    $password = $_SESSION['users']['password'];
}

?>

<?php
echo '<form action="signup-output.php" method="post">';
echo '<table>';
echo '<tr><td align="center">お名前</td></tr><tr><td>';
echo '<input type="text" name="name" value="', $name, '">';
echo '</td></tr>';
echo '<tr><td align="center">ユーザーID</td></tr><tr><td>';
echo '<input type="text" name="user_id" value="', $user_id, '">';
echo '</td></tr>';
echo '<tr><td align="center">パスワード</td></tr><tr><td>';
echo '<input type="text" name="password" value="', $password, '">';
echo '</td></tr>';
echo '</table>';
echo '<input type="submit" value="確定">';
echo '</form>';
?>

</body>

</html>