<?php
function getProductById($id) {
    include_once(__DIR__ . "/../../database/connection.php"); // Cambia a include_once

    $con = connection(); // Llama a la función de conexión
    $sql = "SELECT * FROM users_crud_php.products WHERE id = ?";
    
    // Preparar la declaración
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $id); // Suponiendo que $id es un entero
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    $product = mysqli_fetch_array($result, MYSQLI_ASSOC); // Obtener el producto

    mysqli_stmt_close($stmt); // Cerrar la declaración
    mysqli_close($con); // Cerrar la conexión

    return $product; // Retornar el producto
}

?>
