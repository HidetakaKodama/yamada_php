<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>サインアップ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
    <h2>Sign Up</h2>
    <p>Please fill this form to create an account.</p>
    <div class="wrapper">
        <form action="signup-output.php" method="post">
            <table>
                <tr>
                    <td>User Name</td>
                </tr>
                <tr>
                    <td><input type="text" name="name" value="<?php $name; ?>"></td>
                </tr>
                <tr>
                    <td>User ID</td>
                </tr>
                <tr>
                    <td><input type="text" name="user_id" value="<?php $user_id; ?>"></td>
                </tr>
                <tr>
                    <td>Password</td>
                </tr>
                <tr>
                    <td><input type="text" name="password" value="<?php $password; ?>"></td>
                </tr>
            </table>
            <input type="submit" value="sign">
        </form>
    </div>
</body>

</html>