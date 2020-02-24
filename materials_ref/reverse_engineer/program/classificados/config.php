<?php
session_start();

try {
    $pdo = new PDO("mysql:dbnameclassificados;host=localhost", "teste", "123456");
} catch(PDOException $e){
    echo "FALHOU: ".$e->getMessage();
    exit;
}
?>