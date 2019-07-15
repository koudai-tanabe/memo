<?php
    require('link.php');
    $sql = $pdo->prepare('SELECT * FROM diary');
    $sql->execute();
    $pdo = null;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>日記</title>
</head>
<body>
    <h1><a href=index.php>日記</a></h1>
    <form method="POST" action="insert.php">
    <p>
        <div>タイトル</div><input type="text" name="title">
    </p>
    <p>
        <div>メッセージ</div><input type="text" name="msg"> 
    </p>
    <input type="submit" value="日記を書く">
    </form>
    <h2>タイトル一覧</h2>
    <form method="POST" action="delete.php">
    <a href="update.php">編集</a>
    <a href="delete.php">削除</a>
    </form>
    <?php foreach($sql as $data): ?>

    <form method="POST" action="titlemsg.php" name="fomfom<?= $data['ID'] ?>">
    <input type="hidden" value="<?= $data['ID'] ?>" name="ID">
    <ul>
        <li><a href="javascript: fomfom<?= $data['ID'] ?>.submit()"><?= $data['title'] ?></a></li>
    </ul>
    </form>
    <?php endforeach; ?> 
</body>
</html>