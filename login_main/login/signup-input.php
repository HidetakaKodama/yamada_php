<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>サインアップ</title>
</head>
<?php
$name = $email = $password == '';
if (isset($_SESSION['user'])) {
    $name = $_SESSION['user']['name'];
    $email = $_SESSION['user']['user_id'];
    $password = $_SESSION['user']['password'];
}

?>

<?php
echo '<div>';
echo '<form action="signup-output.php" method="post">';
echo '<table>';
echo '<tr><td align="center">お名前</td></tr><tr><td>';
echo '<input type="text" name="name" value="', $name, '">';
echo '</td></tr>';
echo '<tr><td align="center">Eメール</td></tr><tr><td>';
echo '<input type="text" name="user_id" value="', $user_id, '">';
echo '</td></tr>';
echo '<tr><td align="center">パスワード</td></tr><tr><td>';
echo '<input type="text" name="password" value="', $password, '">';
echo '</td></tr>';
echo '</table>';
echo '<input type="submit" value="確定">';
echo '</form>';
echo '</div>';
?>

</body>

</html>