<?php
    require('link.php');
    $sql = $pdo->prepare('SELECT * FROM diary WHERE ID=?');
    $sql->execute([$_POST["ID"]]);
    $pdo = null;
    foreach($sql as $data);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $data['title'] ?></title>
</head>
<body>
    <p><?= $data['title'] ?></p>
    <p><?= $data['msg'] ?></p>
    
    <a href="index.php">戻る</a>
</body>
</html>
