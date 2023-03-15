<?php

$conn = 'mysql:host=localhost;dbname=learn_up';
$usuario = 'root';
$pass = '';

try{

$pdo = new PDO($conn, $usuario, $pass);

echo'Conectado';


} catch (PDOException $e) {
    print "¡Error!:" . $e->getMessage() . "<br/>";
    die();

}


?>
