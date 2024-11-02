<?php
include(__DIR__ ."/../../database/connection.php");
$con = connection();

$sql = "SELECT * FROM users";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="es" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <link rel="stylesheet" href="/css/panel.css">
</head>

<body>
    <div class="banner-hero container is-fluid">
        <h1 class="title is-1">Panel de administración</h1>
    </div>
    <div class="content container">
    <div class="columns is-4">
    <div class="users-form column is-full-mobile is-one-thirds-tablet is-one.thirds-desktop has-text-centered">
        <h2 class="subtitle is-3">Crear usuario</h2>
        <form action="insert_user" method="POST" class="fixed-grid is-centered">
            <input 
                type="text" 
                name="name" 
                placeholder="Nombre" 
                class="input mt-2 mb-2">
            <input 
                type="text" 
                name="lastname" 
                placeholder="Apellidos"
                class="input mt-2 mb-2">
            <input
                type="text" 
                name="username" 
                placeholder="Username"
                class="input mt-2 mb-2">
            <input 
                type="password" 
                name="password" 
                placeholder="Password"
                class="input mt-2 mb-2">
            <input 
                type="email" 
                name="email" 
                placeholder="Email"
                class="input mt-2 mb-2">
            <input 
                type="submit" 
                value="Agregar"
                class="button is-primary mt-2 mb-2">
        </form>
    </div>
    <div class="users-table column is-full-mobile is-two-thirds-tablet is-two-thirds-desktop has-text-centered">
        <h2 class="subtitle is-3">Usuarios registrados</h2>
        <table class="table is-bordered is-striped is-hoverable is-fullwidth">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['name'] ?></th>
                        <th><?= $row['lastname'] ?></th>
                        <th><?= $row['username'] ?></th>
                        <th><?= $row['password'] ?></th>
                        <th><?= $row['email'] ?></th>
                        <th><a href="update?id=<?= $row['id'] ?>" class="button">Editar</a></th>
                        <th><a href="delete_user?id=<?= $row['id'] ?>" class="button " >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    </div>
    </div>

</body>

</html>
