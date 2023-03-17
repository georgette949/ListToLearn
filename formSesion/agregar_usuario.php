<?php 

//HACER HASH EN LA CONTRASEÑA
//echo password_hash("geo949", PASSWORD_DEFAULT)."\n";


$usuario_nuevo = $_POST['nombre_usuario'];
$contrasena = $_POST['contrasena'];
$contrasena2 = $_POST['contrasena2'];

//verificar con hash que encripta una contraseña y otra no
$contrasena = password_hash($contrasena, PASSWORD_DEFAULT);


//comprobar si la contrseña encriptada corresponde con la contrasen2
if (password_verify($contrasena2, $contrasena)) {
    echo '¡la contraseña es valida!';  
}else {
    echo 'la contraseña no es valida';
}


echo '<pre>';
var_dump($usuario_nuevo);
var_dump($contrasena);
var_dump($contrasena2);
echo '<pre>'















//tambien podria verlo con isset
/*if (isset($_POST['nombre_usuario'])) {
    $nombre_usuario = $_POST['nombre_usuario'];
  } else {
    $nombre_usuario = "";
  }
  
  if (isset($_POST['contrasena'])) {
    $contrasena = $_POST['contrasena'];
  } else {
    $contrasena = "";
  }
  
  if (isset($_POST['contrasena2'])) {
    $contrasena2 = $_POST['contrasena2'];
  } else {
    $contrasena2 = "";
  }*/




?>
