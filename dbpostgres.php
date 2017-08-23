<?php

/**
 * Created by PhpStorm.
 * User: thuanpt
 * Date: 11/07/2017
 * Time: 22:40
 */


$dns_prefix = 'pgsql:';
$host = 'localhost';
$port = '5432';
$dbname = 'lardev';
$user = 'postgres';
$password = '1221';

$dns = $dns_prefix . "host=$host;port=$port;dbname=$dbname;user=$user;password=$password";

try {
    $db = new PDO($dns);
    echo "Ket noi thanh cong";
} catch (PDOException $e) {
    echo $e->getMessage();
}

if (isset($dns)) {
    $stmt = null;
    $sql = "INSERT INTO todo (title, status, created_at) VALUES (:title, :status, :created_at)";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':title', 'Viec lam so 1');
    $stmt->bindValue(':status', '1');
    $stmt->bindValue(':created_at', 'NOW()');
    $stmt->execute();
}


