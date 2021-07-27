<?php
$dsn = 'mysql:host=mysql669.umbler.com:41890;dbname=serradb';
$user = 'serradb';
$password = '2020serradb';
try {
    $conn = new PDO($dsn, $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "Sucesso !!!";
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>