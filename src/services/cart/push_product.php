<?php

// Obtener los datos del formulario
$id = $_POST["id"] ?? null; // Usar null si no está definido
$quantity = $_POST["quantity"] ?? null; // Usar null si no está definido
$existed = false; // Bandera para verificar si el producto ya existe

// Verificar que tanto id como quantity no estén vacíos
if (!empty($id) && !empty($quantity)) {
    // Verificar si ya existe una cookie para el pedido
    if (isset($_COOKIE['hsnb_order'])) {
        // Decodificar la cookie en un array de objetos
        $order = json_decode($_COOKIE['hsnb_order']);
        
        // Buscar si el producto ya está en el pedido
        foreach ($order as $product) {
            if ($product->id === $id) {
                // Si existe, incrementar la cantidad
                $product->quantity += $quantity;
                $existed = true; // Marcar como existente
                break; // Salir del bucle
            }
        }

        // Si el producto no existe, añadir un nuevo item
        if (!$existed) {
            $newItem = (object)[
                "id" => $id,
                "quantity" => $quantity
            ];
            $order[] = $newItem; // Añadir nuevo producto al pedido
        }

        // Actualizar la cookie con la nueva información
        setcookie("hsnb_order", json_encode($order), time() + (86400 * 30));
        header("Location: /producto?id=$id&push_product=true");
        exit();   
    } else {
        // Si no existe la cookie, crear un nuevo pedido con el producto
        $data = [
            (object)[
                "id" => $id,
                "quantity" => $quantity
            ]
        ];
        // Establecer la cookie por primera vez
        setcookie("hsnb_order", json_encode($data), time() + (86400 * 30));
        
        // Redirigir al producto con un mensaje de éxito
        header("Location: /producto?id=$id&push_product=true");
        exit();   
    }
} else {
    // Redirigir al producto con un mensaje de error
    header("Location: /producto?id=$id&push_product=false");
    exit();
}

?>
