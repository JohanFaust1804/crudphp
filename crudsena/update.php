<?php 
    include("model/connection.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM users WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Editar usuarios</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="controller/edit.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input type="text" name="nombre" placeholder="Nombre" value="<?= $row['nombre']?>" required>
                <input type="text" name="lastname" placeholder="Apellidos" value="<?= $row['lastname']?>" required>
                <input type="text" name="username" placeholder="Username" value="<?= $row['username']?>" required>
                <input type="password" name="pass" placeholder="Password" value="<?= $row['pass']?>" required>
                <input type="text" name="email" placeholder="Email" value="<?= $row['email']?>" required>

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>