<?php
    include 'conexao.php';

    $id = $_GET["id"];

    mysqli_query($conexao, "DELETE FROM tb_produtos WHERE id = '$id'");

    echo "<center>";
    echo "<hr>";
    echo "PRODUTO EXCLUIDO COM SUCESSO!!!";
    echo "<hr>";
    echo "<br>";
    echo "<a href=\"cadastro_produto.php\">RETORNAR A TELA ANTERIOR</a>";
    echo "</center>";
?>
