INSERT INTO `matieres` (`idMatiere`, `LibelleMatiere`) VALUES
(1, 'Français'),
(2, 'Mathematiques'),
(3, 'Histoire'),
(8, 'Géographie'),
(10, 'Education Musicale'),
(12, 'Art plastique');

INSERT INTO `utilisateurs` (`idUtilisateur`, `Login`, `NomUtilisateur`, `PrenomUtilisateur`, `MotDePasse`, `Role`, `IdMatiere`) VALUES
(1, 'nono', 'Mayeux', 'Bruno', 'c625ade02c3acde8e4d9de57fca78203', 1, 1),
(11, 'Jean', 'Birgy', 'Birgy', 'b71985397688d6f1820685dde534981b', 2, 2),
(12, 'dav', 'Lelong', 'Lelong', '676ac6f0f8dc64239691d8052409a54c', 2, 3),
(13, 'lolo', 'Toupin', 'Laurent', 'd6581d542c7eaf801284f084478b5fcc', 2, 1),
(14, 'oliv', 'Blarel', 'Olivier', 'af0c3ad1aaaac0a6d0b26e29de113248', 2, 12);

INSERT INTO `eleves` (`idEleve`, `NomEleve`, `PrenomEleve`, `Classe`) VALUES
(1, 'Dupont', 'Eve', 'CE2'),
(2, 'Duran', 'Lea', 'CE1'),
(3, 'Roosebeke', 'Cleo', 'CE2'),
(5, 'Buttin', 'Nicolas', 'CE1'),
(6, 'Patou', 'Matthieu', 'CE1'),
(7, 'Ilski', 'Aurélie', 'CE2'),
(8, 'Codron', 'Aurélie', 'CM2'),
(9, 'Tondeur', 'Charlize', 'CP'),
(10, 'Mamie', 'Lucette', 'CP');

INSERT INTO `suivis` (`idSuivis`, `idEleve`, `idMatiere`, `Note`, `Coefficient`) VALUES
(1, 1, 1, 10, 1),
(2, 1, 2, 15, 1),
(5, 3, 1, 20, 1),
(6, 3, 2, 20, 1),
(7, 8, 1, 15, 1),
(8, 3, 3, 18, 1),
(9, 5, 3, 16, 1),
(10, 7, 3, 15, 1);

