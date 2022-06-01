<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <script>
        window.onload = function() {
            document.cookie = "user_id=; max-age=0";

        }
    </script>
    <form action="login-output.php" method="post">
        <p>ユーザーID</p>
        <input type="text" value="" id="user_id" name="user_id""><br>
        <p>パスワード</p>
        <input type="password" value="" id="password" name="password"><br>
        <p></p>
        <input type="submit" value="Login" id="btn" onclick="clickBtn()">
        <!-- <button id="btn">Login</button> -->
    </form>
</body>

</html>