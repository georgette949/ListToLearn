<?php

$link = 'mysql:host=localhost;dbname=learn_up';
$usuario = 'root';
$pass = '';

try{

$pdo = new PDO($link, $usuario, $pass);

//echo'Conectado';


} catch (PDOException $e) {
    print "¡Error!:" . $e->getMessage() . "<br/>";
    die();

}


?>
