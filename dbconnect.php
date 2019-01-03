<?php
// DBの接続
    // $dsn = 'mysql:dbname=blogg;host=localhost';
    // $user = 'root';
    // $password='';
    // $dbh = new PDO($dsn, $user, $password);
    // //例外処理が使えるようになり、エラーメッセージを確認できるようにする
    // $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    // $dbh->query('SET NAMES utf8');



    $dsn = 'mysql:dbname=heroku_a2823b801196905;host=us-cdbr-iron-east-01.cleardb.net';
    $user = 'bf446449096f72';
    $password='b96c8cc3';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->query('SET NAMES utf8');
?>