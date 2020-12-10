DELIMITER |
CREATE PROCEDURE Majuscule()
BEGIN
UPDATE `etudiants`
SET nomEtudiant = UPPER(nomEtudiant);
UPDATE `etudiants`
SET prenomEtudiant = UPPER(prenomEtudiant);
UPDATE `enseignants`
SET nomEnseignant = UPPER(nomEnseignant);
END
DELIMITER;