<?php 

    
include_once('../conexion.php');


//HACER HASH EN LA CONTRASEÑA
//echo password_hash("geo949", PASSWORD_DEFAULT)."\n";

//capturar datos por post
$usuario_nuevo = $_POST['nombre_usuario'];
$contrasena = $_POST['contrasena'];
$contrasena2 = $_POST['contrasena2'];

//verificar si usuario existe
$sql = 'SELECT * FROM usuarios WHERE nombre = ?';
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($usuario_nuevo));
$resultado = $sentencia->fetch();

var_dump($resultado);

//si existe usuario matamos la operacion
if ($resultado){
  echo '<br>Existe este usuario';
  die();
}

//verificar con hash que encripta una contraseña y otra no
$contrasena = password_hash($contrasena, PASSWORD_DEFAULT);


//comprobar si la contrseña encriptada corresponde con la contrasena2
if (password_verify($contrasena2, $contrasena)) {
    echo '¡la contraseña es valida! <br>'; 


    $sql_agregar = 'INSERT INTO usuarios (nombre, contrasena) VALUES (?,?)';
        $sentencia_agregar = $pdo->prepare($sql_agregar);

        if($sentencia_agregar->execute(array($usuario_nuevo,$contrasena )) ) {
          echo 'Agregado <br>';
        }else{
          echo 'Error<br>';
        }
        
        
        header('<location: index.php');

    
}else {
    echo 'la contraseña no es valida';
}


echo '<pre>';
var_dump($usuario_nuevo);
var_dump($contrasena);
var_dump($contrasena2);
echo '<pre>';





?>
