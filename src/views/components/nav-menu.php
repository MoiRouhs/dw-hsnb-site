<?php
if (isset($_COOKIE['cliente_data'])) {
  // Decodificar el JSON para obtener los datos
  $data = json_decode($_COOKIE['cliente_data'], true);
  $name = htmlspecialchars($data['name']) ;
  $path = '/cliente';
}else{
  $name ;
  $path = '/login';
}
?>
<header class="transparency">
  <a class="link" href="/">
    <img class="logo" src="../assets/logo-2.webp" alt="logo">
  </a>
  <div class="name"><p class="title s-4">Hardware Store Nuts and Bolts</p></div>
  <div class="icons-container">
  <div class="icons">
    <a class="link" href="/cart">
      <img class="cart" src="../assets/cart.svg" alt="cart">
    </a>
    <a class="link" href="<?= $path ;?>" >
      <img class="login" src="../assets/person.svg" alt="cuenta de usuario">
    </a>
  </div>
  <p class="niminame"><?= $name ;?></p>
  </div>
</header>
