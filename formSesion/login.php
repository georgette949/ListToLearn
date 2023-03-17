<?php 

session_start();
include_once('../conexion.php');

$usuario_login = $_POST['nombre_usuario'];

$contrasena_login = $_POST['contrasena'];

echo '<pre>';
var_dump($usuario_login);
var_dump($contrasena_login);
echo'</pre>';

//verificar si usuario existe
$sql = 'SELECT * FROM usuarios WHERE nombre = ?';
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($usuario_login));
$resultado = $sentencia->fetch();

echo '<pre>';
var_dump($resultado);
echo'</pre>';

if(!$resultado){
    //matar la operacion y continua leyendo el codigo ! da resultado negativo
    echo 'no existe usuario';
    die();
}
 echo 'usuario verificado';


 //recuperar contraseña
echo '<pre>';
var_dump($resultado['contrasena']);
echo'</pre>';



 if(password_verify($contrasena_login, ($resultado['contrasena'])) ){
                //las contraseñas son iguales
                $SESSION['admin'] = $usuario_login;
                header('location: restringido.php');
 }else{
    echo 'no son iguales las contraseñas';
    die();
 }





?>