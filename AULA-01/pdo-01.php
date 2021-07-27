<?php
$dsn = 'mysql:host=localhost;dbname=pdo_bd';
$user = 'root';
$password = '';
try {
    $conn = new PDO($dsn, $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Sucesso !!!";
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>