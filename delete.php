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
    <title>削除</title>
</head>
<body>
    <h1><a href=index.php>日記</a></h1>
    <?php foreach($sql as $data): ?>
    <p>
    <form method="POST" action="delete2.php">
    <input type="hidden" value="<?= $data['ID'] ?>" name="ID">
    <?= $data['title'] ?>
    <input type="submit" value="削除">
    </form>
    </p>
    <?php endforeach; ?>
    <a href="index.php">戻る</a>

</body>
</html>