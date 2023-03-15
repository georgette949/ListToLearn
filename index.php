<?php
include_once 'conexion.php';


//LEER

$sql_leer = 'SELECT * FROM task';

$gsent = $pdo->prepare($sql_leer);
$gsent->execute();

$resultado = $gsent->fetchAll();
// var_dump ($resultado);


//AGREGAR
    if ($_POST){
        $title = $_POST['title'];
        $date_time = $_POST['date_time'];
    
        $sql_agregar = 'INSERT INTO task (title, date_time) VALUES (?,?)';
        $sentencia_agregar = $pdo->prepare($sql_agregar);
        $sentencia_agregar->execute(array($title,$date_time));
        
        header('location:index.php');
    }
    





?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>LearnUp</title>
    <script src="https://kit.fontawesome.com/1f2752ff52.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>

        <nav class="navbar bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="./src/logo/logoLearnUp.png" alt="logo" width="60%" height="80%">
                </a>
            </div>
        </nav>


    </header>
    <div class=container mt-5>

        <div class="row">

            <div class="col-md-6" style="margin-top: 40px">

                <h2 style="color: #ccc">what do you want to learn?</h2>
                <form method="POST">
                    <input type="text" class="form-control" style="color:#ccc" name= title placeholder="Here your task">
                    <input type="text"     
                           class="form-control mt-3" 
                           style="color: #ccc"
                           name="date_time"
                           placeholder="YYYY-MM-DD- HH:MM:SS">
                    <button class="btn btn-secondary mt-3">Add</button>
                </form>

                <img src="src/img/imgLearn.png" class="rounded float-start w-100 h-120" alt="img">

            </div>

            <div class="col-md-6" style="margin-top: 30px">

            <?php  foreach($resultado as $dato): ?>

                <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded text-uppercase" 
                     style="background-color:azure"><?php echo $dato['title']?>   
                                                      /
                                                    <?php echo $dato['date_time']?>
                  <a href="" class="float-end">
                    <i class="fas fa-pencil-alt"></i>    
                  </a>                             
            </div>
            
            <?php endforeach  ?>
            </div>
            </body>

</html>