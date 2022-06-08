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
    <h2>Login</h2>
    <form action="login-output.php" method="post">
        <p>User ID</p>
        <input type="text" value="" id="user_id" name="user_id""><br>
        <p>Password</p>
        <input type="password" value="" id="password" name="password"><br>
        <p></p>
        <input type="submit" value="Login" id="btn" onclick="clickBtn()"><br>
        <!-- <button id="btn">Login</button> -->
        <a href="http://yamadashu2.php.xdomain.jp/login_main/login/signup-input.php">Sign up now</a>
    </form>
</body>

</html>
