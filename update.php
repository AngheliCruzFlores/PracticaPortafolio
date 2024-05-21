<?php 

    include('controller.php');
    $conn=connection();
    
    $id=$_GET['Id'];
    $sql="SELECT * FROM usuarios WHERE Id='$id'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="estilo.css" rel="stylesheet">
        <title>Editar usuarios</title>
    </head>
    <body>
        <div class="users-form">
            <form action="edit.php" method="POST">
                <h1>Editar Usuarios</h1>
                <input type="hidden" name="id" value="<?=$row['Id']?>">
                <input type="text" name="name" value="<?=$row['Nombre']?>">
                <input type="email" name="email" value="<?=$row['Email']?>">
                <input type="tel" name="telefono" value="<?=$row['Telefono']?>">
                <input type="password" name="contraseña" value="<?=$row['Contraseña']?>">
                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>