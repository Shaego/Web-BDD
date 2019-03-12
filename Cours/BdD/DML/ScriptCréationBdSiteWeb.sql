# --------------------------------------------------------
# Script de cr�ation de la base de donn�es               
# BdSiteWeb et de ses tables
# Fait par : Michel Payette
# Le : 2019-03-08
# --------------------------------------------------------

## Cr�ation de la base de donn�es avec v�rification
## de sa non-existence.

CREATE DATABASE IF NOT EXISTS BdSiteWeb;

## Cr�ation des tables

USE BdSiteWeb;


# Cr�ation de la table tblEmploy�

CREATE TABLE tblEmploye
(
	noEmploye				SMALLINT	NOT NULL,
	nomEmploye				VARCHAR(25)	NOT NULL,
	prenEmploye				VARCHAR(25)	NOT NULL,
	dateEmbauche			DATE 		NOT NULL
);

# Cr�ation de la table tblClient

CREATE TABLE tblClient
(
	noClient				SMALLINT 	NOT NULL,
	nomClient				VARCHAR(25)	NOT NULL,
	telClient				CHAR(12)	NOT NULL
);

# Cr�ation de la table tblSiteWeb

CREATE TABLE tblSiteWeb
(
	codeSiteWeb				CHAR(5)				NOT NULL,
	titreSiteWeb			VARCHAR(30)			NOT NULL,
	Description				TEXT				NULL,
	nbPages					TINYINT UNSIGNED	NULL,
	noClient				SMALLINT 			NOT NULL
);

# Cr�ation de la table tblEmployeSiteWeb

CREATE TABLE tblEmployeSiteWeb
(
	noEmploye				SMALLINT 		NOT NULL,
	codeSiteWeb				CHAR(5)			NOT NULL,
	NbHeuresTravaillees		DECIMAL(4,2)	NULL
);

# Cr�ation de la table tblLogiciel

CREATE TABLE tblLogiciel
(
	codeLogiciel			CHAR(5)			NOT NULL,
	nomLogiciel				VARCHAR(25)		NOT NULL,
	descriptionLogiciel		VARCHAR(25)		NULL
);

# Cr�ation de la table tblLogicielSiteWeb

CREATE TABLE tblLogicielSiteWeb
(
	codeLogiciel	CHAR(5)	NOT NULL,
	codeSiteWeb		CHAR(5)	NOT NULL
);