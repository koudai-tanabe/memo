<?php
    try{
        $dsn='mysql:host=us-cdbr-iron-east-02.cleardb.net; dbname=heroku_c60b4199442cdcb; charset=utf8';
        $pdo=new PDO($dsn,'b0709bbcb4b17a','b8b55d8c');
    }catch(PDOException $e){
        printf('接続失敗: %s',$e->getMessage());
    }
?>
