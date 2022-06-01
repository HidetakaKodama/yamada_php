<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>サインアップ</title>
    <link rel="stylesheet" href="style.css">
    <script>
        window.onload = function() {
            document.cookie = "user_id=; max-age=0";
        }
    </script>
</head>

<body>
    <?php
    $name = $user_id = $password = '';
    if (isset($_SESSION['users'])) {
        $name = $_SESSION['users']['name'];
        $user_id = $_SESSION['users']['user_id'];
        $password = $_SESSION['users']['password'];
    }

    ?>

    <form action="signup-output.php" method="post">
        <?php
        echo '<table>';
        echo '<tr><td align="center">ユーザーネーム</td></tr><tr><td>';
        echo '<input type="text" name="name" value="', $name, '">';
        echo '</td></tr>';
        echo '<tr><td align="center">ユーザーID</td></tr><tr><td>';
        echo '<input type="text" name="user_id" value="', $user_id, '">';
        echo '</td></tr>';
        echo '<tr><td align="center">パスワード</td></tr><tr><td>';
        echo '<input type="text" name="password" value="', $password, '">';
        echo '</td></tr>';
        echo '</table>';
        echo '<input type="submit" value="sign">';
        ?>
    </form>
</body>

</html>