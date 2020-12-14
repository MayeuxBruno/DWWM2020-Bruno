DROP TABLE IF EXISTS `texte`;
CREATE TABLE IF NOT EXISTS `texte` (
  `idTexte` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `codeTexte` varchar(30) NOT NULL,
  `codeLangue` varchar (3),
  `texte` varchar(100)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nomUser` varchar(30) NOT NULL,
  `prenomUser` varchar(30) NOT NULL,
  `pseudoUser` varchar(30) NOT NULL,
  `mailUser` varchar(50) NOT NULL,
  `passwordUser`varchar(50)  NOT NULL,
  `roleUser` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
