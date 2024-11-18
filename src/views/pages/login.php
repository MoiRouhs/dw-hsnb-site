<html lang="es" data-theme="light">
<head>
    <title>Iniciar sesión | | Hardware Store Nuts and Bolts</title>
    <meta name="description" content="Accede a tu cuenta para gestionar tus pedidos, guardar tu carrito y disfrutar de una experiencia personalizada. Inicia sesión ahora y sigue construyendo tus proyectos con nosotros.">
    <meta name="keywords" content="Iniciar sesión ferretería, Acceso cuenta clientes, Gestión de pedidos online" />
    <meta name="author" content="Carlos Rocha" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
</head>
<body>
    <?php include(__DIR__ . '/../components/nav-menu.php') ?>
    <div class="banner-hero container is-fluid login">
        <h1 class="title is-1">Iniciar sesión</h1>
    </div>
    <div class="section">
        <div class="login-form column is-full-mobile is-one-thirds-tablet is-one.thirds-desktop has-text-centered">
            <h2 class="subtitle is-3">Crear usuario</h2>
            <form action="login_user" method="POST" class="fixed-grid is-centered">

                <input 
                    type="email" 
                    name="email" 
                    placeholder="Email"
                    class="input mt-2 mb-2">
                <input 
                    type="password" 
                    name="password" 
                    placeholder="Password"
                    class="input mt-2 mb-2">
                <input 
                    type="submit" 
                    value="Iniciar"
                    class="button is-primary mt-2 mb-2">
            </form>
        </div>
    </div>
    <?php include(__DIR__ . '/../components/footer.php') ?>
</body>
</html>
