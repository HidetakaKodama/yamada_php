<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
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
    <div class="wrapper">
      <h2>Sign Up</h2>
      <p>Please fill this form to create an account.</p>
      <form action="signup-output.php" method="post">
          <p>User Name</p>
          <input type="text" name="name" value="<?php $name; ?>">
          <p>User ID</p>
          <input type="text" name="user_id" value="<?php $user_id; ?>">
          <p>Password</p>
          <input type="text" name="password" value="<?php $password; ?>">
          <p></p>
          <input type="submit" value="sign">
      </form>
      <a href="http://yamadashu2.php.xdomain.jp/login_main/login/login-input.php">Login now</a>
    </div>
</body>

</html>
