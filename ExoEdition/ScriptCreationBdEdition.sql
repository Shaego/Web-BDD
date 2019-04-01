# --------------------------------------------------------
# Script de cr�ation de la base de donn�es               
# BdEdition et de ses tables
# --------------------------------------------------------

## Cr�ation de la base de donn�es avec v�rification
## de sa non-existence.

CREATE DATABASE IF NOT EXISTS BdEdition;

## Cr�ation des tables

USE BdEdition;

# Cr�ation de la table tblAuteur 

CREATE TABLE tblAuteur
(
	noAuteur			varchar(11)     NOT NULL,
	nomAuteur			varchar(25)    	NOT NULL,
	prenAuteur			varchar(20)     NOT NULL,
	telAuteur   		varchar(14)     NOT NULL,
	noCiviqueAuteur		varchar(6)     	NULL,
	rueAuteur			varchar(30)		NULL,
	villeAuteur			varchar(45)     NULL,
	paysAuteur   		varchar(30) 	NULL,
	codePostalAuteur	varchar(9) 		NULL,
	contratAuteur   	bit     		NOT NULL
);

# Cr�ation de la table tblEditeur

CREATE TABLE tblEditeur
(
	noEditeur  		char(4) 	NOT NULL,
	nomEditeur		varchar(40)	NULL,
	villeEditeur    varchar(20) NULL,
	paysEditeur 	varchar(30)		NULL	
);

# Cr�ation de la table tblLivre 

CREATE TABLE tblLivre
(
	ISBN			char(17)		NOT NULL,
	titreLivre  	varchar(80)     NOT NULL,
	typeLivre   	char(12)        NOT NULL,
	prixLivre  		decimal(5,2)	NULL,
	avanceLivre 	decimal(8,2)	NULL,
	droitsLivre 	int     		NULL,
	cumulAnLivre	int     		NULL,
	notesLivre   	varchar(200)    NULL,
	datePubLivre 	date	       	NOT NULL,
	noEditeur  		char(4) 		NULL
);

# Cr�ation de la table tblLivreAuteur 

CREATE TABLE tblLivreAuteur
(
	noAuteur   	varchar(11) NOT NULL,
	ISBN     	char(17)	NOT NULL,
	pourcDroits int     	NULL
);

# Cr�ation de la table tblEmploi 

CREATE TABLE tblEmploi
(
	noEmploi  	smallint	NOT NULL,
	descEmploi	varchar(50) NOT NULL,
	salaireMin 	int 		NOT NULL,
	salaireMax 	int 		NOT NULL
);

# Cr�ation de la table tblEmploye 

CREATE TABLE tblEmploye
(
	noEmploye  		char(9)		NOT NULL,
	nomEmploye   	varchar(30) NOT NULL,
	prenomEmploye  	varchar(20) NOT NULL,
	initiale   		varchar(1)	NULL,
	salaireEmploye	int			NOT NULL,
	dateEmbauche    date		NOT NULL,
	noEmploi  		smallint    NOT NULL,
	noEditeur  		char(4) 	NOT NULL
);


# Cr�ation de la table tblMagasin 

CREATE TABLE tblMagasin
(
	noMag 			char(4) 	NOT NULL,
	nomMag      	varchar(40) NULL,
	noCiviqueMag    varchar(6) 	NULL,
	rueMag			varchar(30)	NULL,
	villeMag    	varchar(45)	NULL,
	provinceMag   	varchar(3) 	NULL,
	codepostalMag  	char(6) 	NULL,
	noTelephoneMag	char(10)	NULL
);

# Cr�ation de la table tblCommande

CREATE TABLE tblCommande
(
	noCmd   		varchar(10) NOT NULL,
	dateCmd  		date        NOT NULL,
	modePaiement	varchar(12) NOT NULL,
	noMag 			char(4) 	NOT NULL
);

# Cr�ation de la table tblLivreCommande 

CREATE TABLE tblLivreCommande
(
	noCmd   varchar(10)	NOT NULL,
	noLivre varchar(6)	NOT NULL,
	qtCmd   smallint   	NOT NULL
);

## Cr�ation des tables est termin�