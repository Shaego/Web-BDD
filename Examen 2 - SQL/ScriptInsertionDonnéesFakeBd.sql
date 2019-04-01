# --------------------------------------------------------
# Script d''insertion des donn�es des tables             
# FakeBd
# --------------------------------------------------------

USE FakeBd;

# Insertion des donn�es de la table tblArmure

INSERT INTO tblArmure (nomArmure, typeArmure, categoriePoids, categorieTaille, bonusDexMax, bonusCA, poidsKg) VALUES
("Armure de cuir","Armure","L�g�re","0",6,2,3.75),
("Armure de cuir","Armure","Interm�diaire","1",3,4,20),
("Cotte de mailles","Armure","Interm�diaire","2",3,4,40),
("Harnois","Armure","Lourde","2",1,8,50),
("�cu en acier","Bouclier","Interm�diaire","1",null,2,7.5),
("Pavois","Bouclier","Lourde","1",2,4,22.5);

# Insertion des donn�es de la table tblArmurePerso

INSERT INTO tblArmurePerso VALUES
(50, 103),
(54, 104),
(50, 101),
(55, 100),
(53, 102);

# Insertion des donn�es de la table tblPersonnage

INSERT INTO tblPersonnage(nomPerso, racePerso, genrePerso, classePerso) VALUES
("Bob le Fou","Nain","M","Moine"),
("Marie l'archere","Elfe","F","Guerrier"),
("Stan The Man","Gnome","M","Barde"),
("Jojo la baguette","Demie-elfe","F","Magicien"),
("Will le Bi","Demi-orque","B","Barbare");

# Insertion des donn�es de la table tblRace

INSERT INTO tblRace VALUES
("Humain",15,53,"Commun"),
("Demie-elfe",20,93,"Commun|Elfe"),
("Demi-orque",14,45,"Commun|Orque"),
("Elfe",110,350,"Commun|Elfe"),
("Gnome",40,00,"Commun|Gnome"),
("Halfelin",20,100,"Commun|Halfelin"),
("Nain",40,250,"Commun|Nain");

# Insertion des donn�es de la table tblClasse

INSERT INTO tblClasse VALUES
("Barbare",2,5),
("Barde",5,2),
("Druide",2,5),
("Ensorceleur",5,2),
("Guerrier",2,5),
("Magicien",2,2),
("Moine",5,5),
("Paladin",2,5),
("Pretre",2,5),
("Rodeur",5,5),
("Roublard",5,2);





