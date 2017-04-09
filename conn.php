<?php
/**
 * Created by PhpStorm.
 * User: DongHai
 * Date: 2017/4/3
 * Time: 14:12
 */
try{
    $pdo = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','',array(
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ));
    echo "<h1>连接成功</h1>";
}catch (PDOException $e){
    echo $e->getMessage();
}
