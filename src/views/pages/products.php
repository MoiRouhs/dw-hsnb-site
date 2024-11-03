<?php
include(__DIR__ ."/../../database/connection.php");
$con = connection();

$sql = "SELECT * FROM products";
$query = mysqli_query($con, $sql);
?>
<html lang="es" data-theme="light">
<head>
    <title>HSNB - Productos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
</head>
<body>
    <div class="banner-hero container is-fluid products">
        <h1 class="title is-1">Todos Los Productos</h1>
    </div>
    <?php include(__DIR__ . '/../components/nav-menu.php') ?>
    <div class="container">
    <div class="list">
        <?php while ($row = mysqli_fetch_array($query)): ?>
        <?php endwhile; ?>
    </div>
    </div>
    <?php include(__DIR__ . '/../components/footer.php') ?>
</body>
</html>
