<html lang="es" data-theme="light">
<head>
    <title>HSNB - Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/cart.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
</head>
<body>
    <div class="banner-hero container is-fluid cart">
        <h1 class="title is-1">Aquí estas tus cproductos agegados</h1>
    </div>
    <?php include(__DIR__ . '/../components/nav-menu.php') ?>
    <div class="container">
        <h1>Resumen de Compra</h1>
        
        <div class="item-list">
            <div class="header-row">
                <div class="header-name">Nombre</div>
                <div class="header-quantity">Cantidad</div>
                <div class="header-price">Precio</div>
            </div>

            <div class="item-row">
                <div class="item-name">Producto 1</div>
                <div class="item-quantity">2</div>
                <div class="item-price">$20.00</div>
            </div>
            <div class="item-row">
                <div class="item-name">Producto 2</div>
                <div class="item-quantity">1</div>
                <div class="item-price">$15.00</div>
            </div>
            <div class="item-row">
                <div class="item-name">Producto 3</div>
                <div class="item-quantity">3</div>
                <div class="item-price">$30.00</div>
            </div>
            <!-- Agrega más productos según sea necesario -->
        </div>

        <div class="summary-table">
            <div class="summary-row">
                <div class="summary-label">Subtotal:</div>
                <div class="summary-value" id="subtotal">$100.00</div>
            </div>
            <div class="summary-row">
                <div class="summary-label">Descuento:</div>
                <div class="summary-value" id="discount">-$10.00</div>
            </div>
            <div class="summary-row total-row">
                <div class="summary-label">Total:</div>
                <div class="summary-value" id="total">$90.00</div>
            </div>
        </div>
    </div>
    <?php include(__DIR__ . '/../components/footer.php') ?>
</body>
</html>
