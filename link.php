<?php
    try{
        $dsn='mysql:host=localhost; dbname=test3; charset=utf8';
        $pdo=new PDO($dsn,'test3','test3');
    }catch(PDOException $e){
        printf('接続失敗: %s',$e->getMessage());
    }
?>
