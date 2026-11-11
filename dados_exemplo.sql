SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `tb_produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `compra` decimal(10,2) NOT NULL,
  `venda` decimal(10,2) NOT NULL,
  `estoque` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;


INSERT INTO `tb_produtos` (`id`, `descricao`, `categoria`, `compra`, `venda`, `estoque`) VALUES
(1, 'Mause Gamer', 'Periféricos', '20.00', '45.00', 5),
(2, 'Teclado Gamer', 'Informática', '25.00', '50.00', 10),
(3, 'Caixa de som JBL', 'Eletrônicos', '200.00', '500.00', 4),
(4, 'Mause Pad', 'Acessórios', '10.00', '20.00', 50),
(5, 'Pendrive 1TB', 'Informática', '30.00', '60.00', 5),
(7, 'Webcam', 'Periféricos', '100.00', '50.00', 10);
