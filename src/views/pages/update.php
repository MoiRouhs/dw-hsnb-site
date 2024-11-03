<?php 
    include(__DIR__ ."/../../database/connection.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM users WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es" data-theme="light">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Editar usuarios</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
        <link rel="stylesheet" href="/css/panel.css">
    </head>
    <body>
    <div class="banner-hero container is-fluid">
        <h1 class="title is-1">Editar usuario</h1>
    </div>
        <div class="users-form edit">
            <form action="edit_user" method="POST">
                <input class="input mt-2 mb-2" type="hidden" name="id" value="<?= $row['id']?>">
                <input class="input mt-2 mb-2" type="text" name="name" placeholder="Nombre" value="<?= $row['name']?>">
                <input class="input mt-2 mb-2" type="text" name="lastname" placeholder="Apellidos" value="<?= $row['lastname']?>">
                <select class="select mt-2 mb-2 is-fullwidth" name="tipo_cliente" placeholder="Tipo de cliente">
                <option value="<?= $row['tipocliente']?>" selected><?= $row['tipocliente']?></option>
                  <option value="permanente">Permanente</option>
                  <option value="periódico">Periódico</option>
                  <option value="casual">Casual</option>
                  <option value="nuevo">Nuevo</option>
                </select>
                <input class="input mt-2 mb-2" type="text" name="username" placeholder="Username" value="<?= $row['username']?>">
                <input class="input mt-2 mb-2" type="text" name="password" placeholder="Password" value="<?= $row['password']?>">
                <input class="input mt-2 mb-2" type="text" name="email" placeholder="Email" value="<?= $row['email']?>">
                <a class="button mt-2 mb-2" href="/panel">Atras</a>
                <input class="button is-primary mt-2 mb-2" type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>
