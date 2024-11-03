<?php 
    include(__DIR__ ."/../../database/connection.php");
    $con=connection();

    if (isset($_COOKIE['cliente_data'])) {
      // Decodificar el JSON para obtener los datos
        $data = json_decode($_COOKIE['cliente_data'], true);
        $name= htmlspecialchars($data['name']);
        $id= htmlspecialchars($data['id']);
    }else{
        // Lleva a login
        Header("Location: /login");
        exit();
    }
    if(isset($id)){
        $sql="SELECT * FROM users WHERE id='$id'";
        $query=mysqli_query($con, $sql);
        $row=mysqli_fetch_array($query);
    }else{
        Header("Location: /login");
        exit(); 
    }

?>

<!DOCTYPE html>
<html lang="es" data-theme="light">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>HSNB - <?= $name ;?></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
        <link rel="stylesheet" href="/css/home.css">
        <link rel="stylesheet" href="/css/user.css">
    </head>
    <body>
    <?php include(__DIR__ . '/../components/nav-menu.php') ?>
    <div class="banner-hero container is-fluid">
    <h1 class="title is-1">Bienvenido <?= $name ;?></h1>
    </div>
        <div class="users-form edit">
            <form action="edit_user_front" method="POST">
                <input class="input mt-2 mb-2" type="hidden" name="id" value="<?= $row['id']?>">
                <input class="input mt-2 mb-2" type="text" name="name" placeholder="Nombre" value="<?= $row['name']?>">
                <input class="input mt-2 mb-2" type="text" name="lastname" placeholder="Apellidos" value="<?= $row['lastname']?>">
                <input class="input mt-2 mb-2" type="text" name="tipo_cliente" placeholder="Tipo de cliente" value="<?= $row['tipocliente']?>" disabled>
                <input class="input mt-2 mb-2" type="text" name="username" placeholder="Username" value="<?= $row['username']?>">
                <input class="input mt-2 mb-2" type="password" name="password" placeholder="Password" value="<?= $row['password']?>">
                <input class="input mt-2 mb-2" type="text" name="email" placeholder="Email" value="<?= $row['email']?>" disabled>
                <a class="button mt-2 mb-2" href="/">Atras</a>
                <input class="button is-primary mt-2 mb-2" type="submit" value="Actualizar">
            </form>
            <a href="/logout">Cerrar sesión</a>
        </div>

    <?php include(__DIR__ . '/../components/footer.php') ?>
    </body>
</html>
