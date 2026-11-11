<?php
    $conexao = mysqli_connect("localhost", "root", "usbw", "db_loja", 3307);

    if (!$conexao) {
        die("Erro ao conectar ao banco de dados.");
    }

    mysqli_set_charset($conexao, "utf8");
?>  
