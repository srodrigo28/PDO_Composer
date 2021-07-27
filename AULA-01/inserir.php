<?php
// http://www.diogomatheus.com.br/blog/php/trabalhando-com-pdo-no-php/

require_once ("pdo-02.php");

$stmt = $conn->prepare(
    'INSERT INTO tb_obras (obra, cnpj, street, city, resp) 
        VALUES (:obra, :cnpj, :street, :city, :resp)'
);
 
    $obra = 'Goiania Viva';
    $cnpj = '88.222.700/0001-88';
    $street = 'Rua 10, Quadra 73, Lote 08';
    $city = 'Goiânia';
    $resp = 'Ricardo Nascimento';
    
    $stmt->bindValue(':obra', $obra);
    $stmt->bindValue(':cnpj', $cnpj);
    $stmt->bindValue(':street', $street);
    $stmt->bindValue(':city', $city);
    $stmt->bindValue(':resp', $resp);

    $stmt->execute();

    header("Location: http://www.yourwebsite.com/user.php"); 
    exit();

?>