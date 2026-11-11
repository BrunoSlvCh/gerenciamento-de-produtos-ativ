# Gerenciamento de Produtos

Atividade acadêmica Programação em Scripts: sistema de cadastro de produtos, inventário com busca e registro de vendas, feito com HTML, CSS e PHP, usando banco de dados MySQL.

## Tecnologias

- HTML
- CSS
- PHP (mysqli)
- MySQL
- USBWebserver

## Funcionalidades

- Cadastro de produtos (descrição, categoria, valor de compra, valor de venda e estoque)
- Inventário com listagem dos produtos e cálculo do lucro unitário
- Busca por descrição ou categoria
- Venda de produtos, com desconto automático no estoque e registro da venda
- Exclusão de produtos

## Arquivos

- `cadastro_produto.php`: tela de cadastro e inventário, com a busca
- `vender.php`: tela de venda de produtos
- `gravar.php`: recebe o formulário e grava o produto no banco
- `gravar_venda.php`: registra a venda e atualiza o estoque
- `excluir.php`: exclui um produto
- `conexao.php`: conexão com o banco de dados
- `style.css`: estilos das telas
- `banco.sql`: script de criação do banco e das tabelas
- `dados_exemplo.sql`: produtos de exemplo para testar o sistema (opcional)

## Como executar

1. Instale e abra o USBWebserver, com o Apache e o MySQL ligados.
2. Acesse o phpMyAdmin (`http://localhost:8080/phpmyadmin`) com o usuário `root` e a senha `usbw`.
3. Na aba **SQL**, execute o conteúdo do arquivo `banco.sql`.
4. (Opcional) Execute também o `dados_exemplo.sql` para cadastrar produtos de exemplo.
5. Copie os arquivos do projeto para uma pasta dentro de `usbwebserver/root`, por exemplo `INDEX`.
6. Acesse `http://localhost:8080/INDEX/cadastro_produto.php` no navegador.
   
## Configuração do banco

Os dados de conexão ficam no arquivo `conexao.php`:

- Servidor: `localhost`
- Usuário: `root`
- Senha: `usbw`
- Banco: `db_loja`
- Porta: `3307`

Se o seu servidor usar outros valores, altere o `conexao.php`.

## Tabelas

- `tb_produtos`: `id`, `descricao`, `categoria`, `compra`, `venda` e `estoque`
- `tb_vendas`: `id`, `id_produto`, `quantidade`, `valor_venda`, `valor_compra` e `data_venda`
