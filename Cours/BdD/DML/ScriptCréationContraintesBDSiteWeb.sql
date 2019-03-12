# --------------------------------------------------------
# Script de création des contraintes sur les tables de la               
# base de données BdSiteWeb.
# Fait par : Michel Payette
# Le : 2019-03-08
# --------------------------------------------------------

USE BdSiteWeb;

## Création des contraintes de clé primaire

ALTER TABLE tblEmploye			CHANGE noEmploye noEmploye smallint AUTO_INCREMENT PRIMARY KEY;
ALTER TABLE tblClient 			CHANGE noClient noClient smallint AUTO_INCREMENT PRIMARY KEY;
ALTER TABLE tblSiteWeb			ADD PRIMARY KEY (codeSiteWeb);
ALTER TABLE tblEmployeSiteWeb 	ADD PRIMARY KEY (noEmploye, codeSiteWeb);
ALTER TABLE tblLogiciel 		ADD PRIMARY KEY (codeLogiciel);
ALTER TABLE tblLogicielSiteWeb 	ADD PRIMARY KEY (codeLogiciel, codeSiteWeb);


## Création des contraintes de clé étrangère ou clé migrée

ALTER TABLE tblSiteWeb 		ADD FOREIGN KEY (noClient) REFERENCES tblClient (noClient);
ALTER TABLE tblEmployeSiteWeb 	ADD FOREIGN KEY (noEmploye) REFERENCES tblEmploye (noEmploye);
ALTER TABLE tblEmployeSiteWeb 	ADD FOREIGN KEY (codeSiteWeb) REFERENCES tblSiteWeb (codeSiteWeb);
ALTER TABLE tblLogicielSiteWeb 	ADD FOREIGN KEY (codeLogiciel) REFERENCES tblLogiciel (codeLogiciel);
ALTER TABLE tblLogicielSiteWeb 	ADD FOREIGN KEY (codeSiteWeb) REFERENCES tblSiteWeb (codeSiteWeb);

## Création des contraintes de modification de la valeur de départ
## des clés auto-incrémentées

ALTER TABLE tblEmploye AUTO_INCREMENT = 10;
ALTER TABLE tblClient AUTO_INCREMENT = 100;

## Création des contraintes de valeur par défaut

ALTER TABLE tblSiteWeb ALTER nbPages SET DEFAULT 1;


