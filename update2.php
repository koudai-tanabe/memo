
<?php
    require('link.php');
    
    $sql = $pdo->prepare('SELECT * FROM diary WHERE ID=?');

    $sql->execute([$_POST['ID']]);

    foreach($sql as $data);

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
    <form method="POST" action="update3.php">
    <p>
        <input type="text" value="<?= $data['title'] ?>" name="title">
    </p>
    <p>
        <input type="text" value="<?= $data['msg'] ?>" name="msg">
    </p>
    <p>
    <input type="hidden" value="<?= $data['ID'] ?>" name="ID">
    <input type="submit" value="編集完了">
    </p>
    </form>
    
</body>
</html>