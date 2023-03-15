<?php
//echo 'editar.php?id=1&title=java&date_time=2023-16-01';
//echo '<br>';

$id = $_GET['id'];
$title = $_GET['title'];
$date_time = $_GET['date_time'];

//echo $id;
//echo '<br>';
//echo $title;
//echo '<br>';
//echo $date_time;


include_once 'conexion.php';


$sql_editar = 'UPDATE task SET title=?, date_time=? WHERE id=?';
$sentencia_editar = $pdo->prepare($sql_editar);
$sentencia_editar->execute(array($title,$date_time,$id));

header('location:index.php');


?>