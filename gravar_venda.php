<?php
    include 'conexao.php';

    $produto    = $_POST["sel_produto"];
    $quantidade = $_POST["txt_quantidade"];

    $sql   = mysqli_query($conexao, "SELECT * FROM tb_produtos WHERE id = '$produto'");
    $linha = mysqli_fetch_assoc($sql);

    echo "<center>";
    echo "<hr>";

    if (is_numeric($quantidade) && $quantidade > 0 && $quantidade <= $linha["estoque"]) {
        $venda  = $linha["venda"];
        $compra = $linha["compra"];

        mysqli_query($conexao, "UPDATE tb_produtos SET estoque = estoque - $quantidade WHERE id = '$produto'");
        mysqli_query($conexao, "INSERT INTO tb_vendas (id_produto, quantidade, valor_venda, valor_compra)
                                VALUES ('$produto', '$quantidade', '$venda', '$compra')");

        echo "VENDA REGISTRADA COM SUCESSO!!!";
    } else {
        echo "QUANTIDADE INVALIDA OU ESTOQUE INSUFICIENTE!!!";
    }

    echo "<hr>";
    echo "<br>";
    echo "<a href=\"cadastro_produto.php\">RETORNAR A TELA ANTERIOR</a>";
    echo "</center>";
?>
