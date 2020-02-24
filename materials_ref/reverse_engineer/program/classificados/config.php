<?php
session_start();

global $pdo;
try {
    $pdo = new PDO("mysql:dbnameclassificados;host=localhost", "teste", "123456");
} catch(PDOException $e){
    echo "FALHOU: ".$e->getMessage();
    exit;
}
?>