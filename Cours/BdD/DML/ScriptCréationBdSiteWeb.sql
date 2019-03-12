# --------------------------------------------------------
# Script de création de la base de données               
# BdSiteWeb et de ses tables
# Fait par : Michel Payette
# Le : 2019-03-08
# --------------------------------------------------------

## Création de la base de données avec vérification
## de sa non-existence.

CREATE DATABASE IF NOT EXISTS BdSiteWeb;

## Création des tables

USE BdSiteWeb;


# Création de la table tblEmployé

CREATE TABLE tblEmploye
(
	noEmploye				SMALLINT	NOT NULL,
	nomEmploye				VARCHAR(25)	NOT NULL,
	prenEmploye				VARCHAR(25)	NOT NULL,
	dateEmbauche			DATE 		NOT NULL
);

# Création de la table tblClient

CREATE TABLE tblClient
(
	noClient				SMALLINT 	NOT NULL,
	nomClient				VARCHAR(25)	NOT NULL,
	telClient				CHAR(12)	NOT NULL
);

# Création de la table tblSiteWeb

CREATE TABLE tblSiteWeb
(
	codeSiteWeb				CHAR(5)				NOT NULL,
	titreSiteWeb			VARCHAR(30)			NOT NULL,
	Description				TEXT				NULL,
	nbPages					TINYINT UNSIGNED	NULL,
	noClient				SMALLINT 			NOT NULL
);

# Création de la table tblEmployeSiteWeb

CREATE TABLE tblEmployeSiteWeb
(
	noEmploye				SMALLINT 		NOT NULL,
	codeSiteWeb				CHAR(5)			NOT NULL,
	NbHeuresTravaillees		DECIMAL(4,2)	NULL
);

# Création de la table tblLogiciel

CREATE TABLE tblLogiciel
(
	codeLogiciel			CHAR(5)			NOT NULL,
	nomLogiciel				VARCHAR(25)		NOT NULL,
	descriptionLogiciel		VARCHAR(25)		NULL
);

# Création de la table tblLogicielSiteWeb

CREATE TABLE tblLogicielSiteWeb
(
	codeLogiciel	CHAR(5)	NOT NULL,
	codeSiteWeb		CHAR(5)	NOT NULL
);