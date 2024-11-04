<?php

include(__DIR__ . '/../../services/cart/get_product.php');
if (isset($_COOKIE['hsnb_order'])) {
    // Decodificar el JSON para obtener los datos
    $order = json_decode($_COOKIE['hsnb_order'], true);
}

?>

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
    <?php 
        $subtotal = 0;
        if(isset($data)){
            switch ($data['tipo-cliente']) {
                case 'permanente':
                    $discount = 0.1 ;
                    break;
                case 'periódico':
                    $discount = 0.05 ;
                    break;
                case 'casual':
                    $discount = 0.02 ;
                    break;
                case 'nuevo':
                    $discount = 0 ;
                    break;
                default:
                    $discount = 0 ;
                    break;
            }
        }else{
            $discount = 0 ;
        }
    ?>
    <div class="container">
    <?php if(isset($order)):?>
        <h2 class="title s-2">Resumen de Compra</h2>
        
        <div class="item-list">
            <div class="header-row">
                <div class="header-name">Nombre</div>
                <div class="header-quantity">Cantidad</div>
                <div class="header-price">Precio</div>
            </div>

            <!-- Agrega más productos según sea necesario -->
            <?php 
                foreach($order as $item){
                $product = getProductById($item['id']);
                $itemPrice = (int)$item['quantity'] * (int)$product['price'];
                $subtotal += $itemPrice ;
            ?>
                <div class="item-row">
                    <div class="item-name"><?= $product['name'] ;?></div>
                    <div class="item-quantity"><?= $item['quantity'] ;?></div>
                    <div class="item-price">$ <?= $itemPrice ;?></div>
                </div>
            <?php }?>
        </div>

        <div class="summary-table">
            <div class="summary-row">
                <div class="summary-label">Subtotal:</div>
                <div class="summary-value" id="subtotal">$<?= $subtotal ;?></div>
            </div>
            
            <?php if($discount > 0.00 || $subtotal > 100000):?>
            <?php 
                if($subtotal > 100000){
                    $discount += 0.02;
                }    
                $moneyDiscount += ceil( $subtotal * $discount );
            ?>
            <div class="summary-row">
                <div class="summary-label">Descuento:</div>
                <div class="summary-value" id="discount">-$<?= $moneyDiscount ;?></div>
            </div>
            <?php endif?>
            <div class="summary-row total-row">
                <div class="summary-label">Total:</div>
                <div class="summary-value" id="total">$<?= $subtotal - $moneyDiscount ;?></div>
            </div>
        </div>
        <a href="/gracias"class="btn button is-primary">Cotizar y comprar</a>
    </div>
    <?php else:?>
        <h2 class="title s-2">No tienes productos para comprar</h2>
        <a href="/">Volver a la tienda</a>
    <?php endif;?>
    <?php include(__DIR__ . '/../components/footer.php') ?>
</body>
</html>
