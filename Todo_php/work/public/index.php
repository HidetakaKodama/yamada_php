<?php

require_once(__DIR__ . '/../app/config.php');

//$var = $_COOKIE['user_id'];

//中身確認
// if (isset($var)) {
//   $alert = "<script type='text/javascript'>alert('入っています');</script>";
//   echo $alert;
// } else {
//   $jelart = "<script type='text/javascript'>alert('空っぽです');</script>";
//   echo $jelart;
// }

createToken();

$pdo = getPdoInstance();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  validateToken();
  $action = filter_input(INPUT_GET, 'action');

  switch ($action) {
    case 'add';
      addTodo($pdo);
      break;
    case 'toggle';
      toggleTodo($pdo);
      break;
    case 'delete';
      deleteTodo($pdo);
      break;
    default;
      exit;
  }

  header('Location: ' . SITE_URL);
  exit;
}

$todos = getTodos($pdo);
?>



<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>My Todos</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <main>
    <h1>Todos</h1>

    <form action="?action=add" method="post">
      <input type="text" name="title" placeholder="Please enter the todo.">
      <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">
      <input type="hidden" name="user_id" value="<?php echo $userId; ?>">
    </form>

    <ul>
      <?php foreach ($todos as $todo) : ?>
        <li>
          <form action="?action=toggle" method="post">
            <input type="checkbox" <?= $todo->is_done ? 'checked' : ''; ?>>
            <input type="hidden" name="id" value="<?= h($todo->id); ?>">
            <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">
          </form>

          <span class="<?= $todo->is_done ? 'done' : ''; ?>">
            <?= h($todo->title); ?>
          </span>

          <form action="?action=delete" method="post" class="delete-form">
            <span class="delete">削除</span>
            <input type="hidden" name="id" value="<?= h($todo->id); ?>">
            <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">
          </form>
        </li>
      <?php endforeach; ?>
    </ul>
  </main>

  <script src="js/main.js"></script>
</body>

</html>