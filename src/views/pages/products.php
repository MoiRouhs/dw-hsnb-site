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
        <div class="card">
  <div class="card-image">
    <figure class="image is-4by3">
      <img
        src="https://bulma.io/assets/images/placeholders/1280x960.png"
        alt="Placeholder image"
      />
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">
        <figure class="image is-48x48">
          <img
            src="https://bulma.io/assets/images/placeholders/96x96.png"
            alt="Placeholder image"
          />
        </figure>
      </div>
      <div class="media-content">
        <p class="title is-4">John Smith</p>
        <p class="subtitle is-6">@johnsmith</p>
      </div>
    </div>

    <div class="content">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec
      iaculis mauris. <a>@bulmaio</a>. <a href="#">#css</a>
      <a href="#">#responsive</a>
      <br />
      <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
    </div>
  </div>
</div>
        <?php endwhile; ?>
    </div>
    </div>
    <?php include(__DIR__ . '/../components/footer.php') ?>
</body>
</html>
