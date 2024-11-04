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
    <link rel="stylesheet" href="/css/products.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
</head>
<body>
    <div class="banner-hero container is-fluid products">
        <h1 class="title is-1">Todos Los Productos</h1>
    </div>
    <?php include(__DIR__ . '/../components/nav-menu.php') ?>
    <div class="container products">
    <div class="list">
        <?php while ($row = mysqli_fetch_array($query)): ?>
        <div class="card">
  <div class="card-image">
    <figure class="image is-4by3">
      <img
      src="<?= $row['image'] ;?>"
        alt="<?= $row['name'] ;?>"
      />
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
        <div class="media-content">
        <p class="title is-4"><?= $row['name'] ;?></p>
        <a class="button is-link" href="/producto?id=<?= $row['id'] ;?>">Ver más</a>
      </div>
    </div>
  </div>
</div>
        <?php endwhile; ?>
    </div>
    </div>
    <?php include(__DIR__ . '/../components/footer.php') ?>
</body>
</html>
