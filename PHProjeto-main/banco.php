<?php

try{

$conexao = new PDO('mysql:host=localhost:3307;dbname=sistema', 'root', '1234');
$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$result = $conexao->query("SELECT * FROM Supervisor")->fetchAll();

    var_dump($result);

   }   catch(PDOException $erro) {
    echo "ERRO =>" . $erro->GETmessage();
}

?>      

<mysql
CREATE TABLE administradores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);
