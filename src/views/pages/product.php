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
    <title>Conoce nuestro producto: <?= $row['name'] ;?> | Ferretería HSNB</title>
    <meta name="description" content="Descubre nuestra amplia variedad de productos diseñados para cubrir todas tus necesidades en construcción, remodelación y mantenimiento. Desde herramientas y equipos hasta materiales de calidad, contamos con todo lo necesario para que tus proyectos sean un éxito.">
    <meta name="keywords" content="<?= $row['name'] ;?>, Productos de construcción, Herramientas y materiales" />
    <meta name="author" content="Carlos Rocha" />
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
        <img src="<?= $row['image']?>" alt="<?= $row['name']?>" title="<?= $row['name']?>">
        </div>
        <div class="product-details">
        <h1><?= $row['name'] ;?></h1>
            <p>Descubre nuestra amplia variedad de productos diseñados para cubrir todas tus necesidades en construcción, remodelación y mantenimiento. Desde herramientas y equipos hasta materiales de calidad, contamos con todo lo necesario para que tus proyectos sean un éxito.</p>
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
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "<?= $row['name']?>",
    "image": "<?= $row['image']?>",
    "description": "Descubre nuestra amplia variedad de productos diseñados para cubrir todas tus necesidades en construcción, remodelación y mantenimiento. Desde herramientas y equipos hasta materiales de calidad, contamos con todo lo necesario para que tus proyectos sean un éxito.",
    "review": {
      "@type": "Review",
      "reviewRating": {
        "@type": "Rating",
        "ratingValue": 4,
        "bestRating": 5
      },
      "author": {
        "@type": "Person",
        "name": "Carlos Rocha"
      }
    },
    "sku": "<?= $row['id']?>",
    "brand": {
      "@type": "Brand",
      "name": "HSNB"
    },
    "offers": {
      "@type": "Offer",
          "url": "http://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ;?>",
      "priceCurrency": "COP",
      "price": <?= $row['price']?>,
      "priceValidUntil": "2024-12-31",
      "availability": "https://schema.org/InStock"
    }

  }
  </script>
<script>
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
    event: "view_item",
    ecommerce: {
        items: [
            {
                item_name: <?= $row['name']?>, 
                item_id: <?= $row['id']?>,
                price: <?= $row['price']?>,
                quantity: 1
            }
        ]
    },
    page_type: "product_page",                     // Tipo de página
    user_status: "logged_in"                       // Estado del usuario: 'logged_in' o 'guest'
});
</script>
</body>
</html>
