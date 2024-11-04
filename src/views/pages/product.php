<?php
    include(__DIR__ ."/../../database/connection.php");
    $con = connection();

    $id=$_GET['id'];
    $sql = "SELECT * FROM users_crud_php.products WHERE id = '$id';";
    $query = mysqli_query($con, $sql);
    $row=mysqli_fetch_array($query);
?>
<html lang="es" data-theme="light">
<head>
    <title>HSNB - Producto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/product.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">

</head>
<body>
    <?php include(__DIR__ . '/../components/nav-menu.php') ?>
    <div class="content">
        <div class="product-image">
        <img src="<?= $row['image']?>" alt="<?= $row['name']?>">
        </div>
        <div class="product-details">
        <h1><?= $row['name'] ;?></h1>
            <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicosr.</p>
            <p class="price">$ <?= $row['price']?></p>
            <div class="container-actions">
                <form class="actions" action="push_product" method="POST" class="fixed-grid is-centered">
                    <input class="input mt-2 mb-2" type="hidden" name="id" value="<?= $row['id']?>">
                    <input type="number" min="1" max="<?= $row['quantity'] ;?>" name="quantity" value="1">
                    <input class="button is-primary mt-2 mb-2" type="submit" value="Agregar al carrito">
                </form>
            </div>
        </div>
    </div>
    <?php include(__DIR__ . '/../components/footer.php') ?>
</body>
</html>
