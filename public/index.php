<?php
// index.php

// Obtener la ruta de la solicitud
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Quitar la barra inicial si es necesario
$route = trim($requestUri, '/');

// Enrutamiento simple
switch ($route) {
case '':
  // Página de inicio
  require '../src/controllers/home.php';
  $controller = new HomeController();
  $controller->index();
  break;

case 'panel':
  require '../src/controllers/panel.php';
  $controller = new PanelController();
  $controller->index();
  break;

case 'panel/update':
  require '../src/controllers/update.php';
  $controller = new UpdateController();
  $controller->index();
  break;

case 'cart':
  require '../src/controllers/cart.php';
  $controller = new cartController();
  $controller->index();
  break;

case 'productos':
  require '../src/controllers/products.php';
  $controller = new ProductsController();
  $controller->index();
  break;

case 'producto':
  require '../src/controllers/product.php';
  $controller = new ProductController();
  $controller->index();
  break;

case 'login':
  require '../src/controllers/login.php';
  $controller = new loginController();
  $controller->index();
  break;

case 'cliente':
  require '../src/controllers/user.php';
  $controller = new UserController();
  $controller->index();
  break;

case 'insert_user':
  require( __DIR__ . '/../src/services/user/insert_user.php' );
  break;

case 'delete_user':
  require( __DIR__ . '/../src/services/user/delete_user.php' );
  break;

case 'panel/edit_user':
  require( __DIR__ . '/../src/services/user/edit_user.php' );
  break;

case 'login_user':
  require( __DIR__ . '/../src/services/user/login_user.php' );
  break;

case 'logout':
  require( __DIR__ . '/../src/services/user/logout_user.php' );
  break;

case 'push_product':
  require( __DIR__ . '/../src/services/cart/push_product.php' );
  break;

default:
  // Página 404
  http_response_code(404);
  //require '../views/404.php';
  Header("Location: /");
  exit();
  break;
}
