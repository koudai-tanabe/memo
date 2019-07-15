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
    <title>編集</title>
</head>
<body>
    <h1><a href=index.php>日記</a><h1>
    <?php foreach($sql as $data): ?>
    <form method="POST" action="update2.php" name="fom<?= $data['ID'] ?>">
    <input type="hidden" value="<?= $data['ID'] ?>" name="ID">
    <ul>
        <li><a href="javascript: fom<?= $data['ID'] ?>.submit()"><?= $data['title'] ?></a></li>
    </ul>
    </form>
    <?php endforeach; ?>
    <a href="index.php">戻る</a>
</body>
</html>