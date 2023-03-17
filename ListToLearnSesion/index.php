<?php session_start()?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="sesion.php">Iniciar Sesion</a>  
    <a href="protegido.php">Contenido protegido</a>  
    <h1>Bienvenido: <?php echo isset($_SESSION['admin']) ? $_SESSION['admin']:'Invitado'?></h1>

</body>
</html>














<?php

//Comprobar que Isset me diga si una variable esta definida y no es NULL

//$login = 'georgette';
//var_dump( isset($login));
//if (isset($login)){
 //  echo 'contenido protegido';
//} else{
    //echo'No tienes permisos';
//}
?>