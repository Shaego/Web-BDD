CREATE DATABASE CreationFakeBd_Baptiste_Bouillet;

USE CreationFakeBd_Baptiste_Bouillet;

CREATE TABLE tblPersonnage
(
    noPersonnage	SMALLINT(5) NOT NULL,
    nomPerso varchar(20) NOT NULL,
    racePerso	varchar(20) NOT NULL,
    genrePerso	char(1) NOT NULL,
    classePerso	varchar(15) NOT NULL
);

CREATE TABLE tblArmure
(
	noArmure	smallint(5) NOT NULL,
	nomArmure	varchar(25) NOT NULL,
	typeArmure	varchar(10) NOT NULL,
	categoriePoids	varchar(15) NOT NULL,
	categorieTaille	char(1)NOT NULL,
	bonusDexMax	tinyint(3),
	bonusCA	tinyint(3) NOT NULL,
	poidsKg	decimal(4,2) NOT NULL
);

CREATE TABLE tblArmurePerso
(
	noArmure	smallint(5) NOT NULL,
	noPersonnage	smallint(5) NOT NULL
);

CREATE TABLE tblClasse
(
	nomClasse	varchar(15) NOT NULL,
	bonusReflexe	tinyint(3) NOT NULL,
	bonusVigueur	tinyint(3) NOT NULL
);

CREATE TABLE tblRace
(
	nomRace	varchar(20) NOT NULL,
	ageAdulte	smallint(5) NOT NULL,
	ageAvance	smallint(5) NOT NULL,
	languesRace	varchar(25) 
);