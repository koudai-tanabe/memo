<?php

    require('link.php');

    $sql = $pdo->prepare('UPDATE diary SET title=?, msg=? WHERE ID=?');

    $sql->execute([$_POST['title'],$_POST['msg'],$_POST['ID']]);

    $pdo = null;

    header('Location:update.php');

?>