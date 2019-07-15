<?php   
    require('link.php');
    $sql = $pdo->prepare('INSERT INTO diary(title,msg) VALUE(?,?)');
    $sql->execute([$_POST['title'],$_POST['msg']]);

    $pdo = null;

    header('Location:index.php');
?>