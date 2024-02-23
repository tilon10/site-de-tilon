<?php
$host = " localhost";
$port = "5433";
$dbname = "formulario";
$user = "postgres";
$password = "pwd123";

$dsn = "pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password";

try{
    // Criar uma conexão PDO
    $pdo = new PDO($dsn);

    if($pdo){
        echo "";
    }
}catch (PDOException $e){
    // Exibir erro de conexão
    echo $e->getMessage();
}
?>
