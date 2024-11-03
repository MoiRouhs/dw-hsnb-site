<?php
    setcookie("cliente_data", "", time() - 3600);
    Header("Location: /");
    exit();
?>
