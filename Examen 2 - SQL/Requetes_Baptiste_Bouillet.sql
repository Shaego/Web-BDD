USE CreationFakeBd_Baptiste_Bouillet;

//Montre les personnages non féminins et non masculins

SELECT nomPerso
FROM tblPersonnage
WHERE genrePerso NOT 'M' OR NOT 'F';

//Montre toutes les informations des categories Intermédiaire dont le poids est inférieur à 30kg

SELECT *
FROM tblArmure
WHERE categoriePoids = 'Intermédiaire' AND poidsKg < 30;

//Montre le nom et le genre des personnages par nom décroissants

SELECT nomPerso, genrePerso
FROM tblPersonnage
ORDER BY nomPerso DESC;

//Affiche les armures sans doublons

SELECT DISTINCT typeArmure
FROM tblArmure;

//Supprime la classe Incrementeur

DELETE FROM tblClasse
WHERE nomClasse = 'Incrementeur';

//Supprime le personnage Reivax

DELETE FROM tblPersonnage
WHERE nomPerso = 'Reivax';

//Modifie le bonus de vigueur de la classe Incrementeur à 98

UPDATE tblClasse SET bonusVigueur = '98'
WHERE nomClasse = 'Incrementeur'; 

//Ajoute une nouvelle classe Incrementeur

INSERT INTO tblClasse(nomClasse, bonusReflexe, bonusVigueur)
VALUES('Incrementeur', '1', '99');

//Ajoute un nouveau personnage Reivax

INSERT INTO tblPersonnage(nomPerso, racePerso, genrePerso, classePerso)
VALUES('Reivax', 'Halfelin','Homme','Incrementeur');

