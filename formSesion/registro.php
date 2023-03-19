<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>REGISTRO DE USUARIOS</h3>
    <form action="agregar_usuario.php" method="POST">
    <input type="text" name="nombre_usuario" placeholder="user">
    <input type="text" name="contrasena" placeholder="password">
    <input type="text" name="contrasena2" placeholder="password again">
    <button class="submit">Save</button>
    </form>

    <h3>LOGIN</h3>
    <form action="login.php" method="POST">
    <input type="text" name="nombre_usuario" placeholder="user">
    <input type="text" name="contrasena" placeholder="password">
    <button class="submit">Save</button>
    </form>


</body>
</html>