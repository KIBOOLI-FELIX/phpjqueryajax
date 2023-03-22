<?php

$server="localhost";
$db="family";
$user="root";
$pwd="root";
$charset="utf8mb4";
//creating a connection to the database
$dsn="mysql:host=$server;dbname=$db;charset=$charset";
try{
   $pdo=new \PDO($dsn,$user,$pwd);
   $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch(\PDOException $e)
{
  throw new \PDOException($e->getMessage(), (int)$e->getCode());
};

?>