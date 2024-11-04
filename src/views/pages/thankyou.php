<?php

if (!isset($_COOKIE['hsnb_order'])) {
    Header("Location: /");
    exit();
}

?>
<html lang="es" data-theme="light">
<head>
    <title>HSNB - Gracias</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/thankyou.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
</head>
<body>
    <?php include(__DIR__ . '/../components/nav-menu.php') ?>
    <div class="banner-hero container is-fluid thankyou">
        <h1 class="title is-1">Gracias por confiar en nosotros</h1>
    </div>
    <div class="container">
        <div class="message">
        <?php if(isset($_COOKIE['cliente_data'])):?>
        <?php 
            setcookie("hsnb_order", "", time() - 3600);
        ?>
        <p class="title s-2">Gracias por tu compra recibirarun correo con la cotización y link para realizar el pago</p>
        <a href="/">Volver a la tienda</a>
        <?php else:?>
            <p class="subtitle s-2">Aun no tienes con una cuenta, crea una cuenta o abre tu cuenta <a href="/login">aqui</a></p>
        <?php endif;?>
        </div>
    </div>
    <?php include(__DIR__ . '/../components/footer.php') ?>
</body>
</html>
