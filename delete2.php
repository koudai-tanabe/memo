<?php
    require('link.php');

    $sql = $pdo->prepare('DELETE FROM diary WHERE ID=?');

    $sql->execute([$_POST['ID']]);

    $pdo = null;
    
    header('Location:delete.php');
?>