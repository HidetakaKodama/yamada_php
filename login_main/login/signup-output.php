<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>サインアップ</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="style.css">
</head>
<?php
$pdo = new PDO(
    'mysql:host=mysql1.php.xdomain.ne.jp;dbname=yamadashu2_main;charset=utf8',
    'yamadashu2_date',
    'dbdatebase'
);
if (isset($_SESSION['users'])) {
    $id = $_SESSION['users']['id'];
    $sql = $pdo->prepare('select * from users where id!=? and password=?');
    $sql->execute([$id, $_REQUEST['password']]);
} else {
    $sql = $pdo->prepare('select * from users where password=?');
    $sql->execute([$_REQUEST['password']]);
}
if (empty($sql->fetchAll())) {
    if (isset($_SESSION['users'])) {
        // $sql = $pdo->prepare('update users set name=?, userid=?, ' .
        //     'password=? where id=?');
        $sql = $pdo->prepare('insert into users(name,user_id,password) 
            values(name=?,user_id=?,password=?)');
        $sql->execute([
            $_REQUEST['name'], $_REQUEST['user_id'],
            $_REQUEST['password'], $id
        ]);
        $_SESSION['users'] = [
            'id' => $id, 'name' => $_REQUEST['name'],
            'user_id' => $_REQUEST['user_id'], 'password' => $_REQUEST['password']
        ];
        echo 'お客様情報を更新しました。';
    } else {
        $sql = $pdo->prepare('insert into users values(null,?,?,?)');
        $sql->execute([
            $_REQUEST['name'], $_REQUEST['user_id'],
            $_REQUEST['password']
        ]);
        header('Location: http://yamadashu2.php.xdomain.jp/login_main/login/home-input.php');
    }
} else {
    echo 'ログイン名がすでに使用されていますので、変更してください。';
}
?>
</body>

</html>