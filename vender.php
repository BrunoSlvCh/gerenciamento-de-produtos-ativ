<?php
    include 'conexao.php';

    $sql = mysqli_query($conexao, "SELECT id, descricao, estoque FROM tb_produtos WHERE estoque > 0 ORDER BY descricao ASC");
?>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Venda de Produto</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<div class="container">

		<form action="gravar_venda.php" method="POST" name="venda">
			<h2>🛒 Venda de Produto</h2>

			<table class="form" width="100%" border="0">
				<tr>
					<td width="50%"><b>Produto</b></td>
					<td width="25%"><b>Quantidade</b></td>
					<td width="25%"></td>
				</tr>
				<tr>
					<td>
						<select name="sel_produto">
							<?php while ($linha = mysqli_fetch_assoc($sql)) { ?>
							<option value="<?php echo $linha["id"]; ?>"><?php echo $linha["descricao"]; ?> (estoque: <?php echo $linha["estoque"]; ?>)</option>
							<?php } ?>
						</select>
					</td>
					<td><input type="text" name="txt_quantidade" class="centro"></td>
					<td></td>
				</tr>
			</table>

			<input type="submit" class="btn" name="btn_vender" value="REGISTRAR VENDA">
			<input type="button" class="btn" name="btn_voltar" value="VOLTAR" onclick="window.location='cadastro_produto.php'">
		</form>

	</div>

</body>
</html>
