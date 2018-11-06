CREATE TABLE IF NOT EXISTS `users` (
  `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `email` varchar(80) DEFAULT NULL,
  `usuario` varchar(20) NOT NULL,
  `senha` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `nome`, `email`, `usuario`, `senha`) VALUES
(1, 'José da Silva', 'josedasilva@gmail.com', 'josesilva', '6fc22daa0ed5bd0cc14d8cb5e16ef43ba9b4b830'),
(2, 'Maria dos Santos', 'mariasantos@hotmail.com', 'mariasantos', 'cc03b420beb76bcb29644ed8582040d87e80c543');