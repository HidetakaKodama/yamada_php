<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="container">
        <form action="login-output.php" method="post">
            <p>ユーザーID</p>
            <input type="text" name="user_id"><br>
            <p>パスワード</p>
            <input type="password" name="password"><br>
            <p>
            <input type="submit" value="Login" id="btn">
        </form>
    </div>
</body>

</html>