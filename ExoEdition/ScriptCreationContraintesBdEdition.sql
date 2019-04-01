# --------------------------------------------------------
# Script de création des contraintes sur les tables de la               
# base de données BdVeterinaire
# --------------------------------------------------------

USE BdEdition;

## Création des contraintes de clé primaire

ALTER TABLE tblEmploi	CHANGE noEmploi noEmploi smallint AUTO_INCREMENT PRIMARY KEY;
ALTER TABLE tblEmploye 	ADD PRIMARY KEY (noEmploye);
ALTER TABLE tblEditeur 	ADD PRIMARY KEY (noEditeur);
ALTER TABLE tblLivre	ADD PRIMARY KEY (noLivre);
ALTER TABLE tblMagasin	ADD PRIMARY KEY (noMag);
ALTER TABLE tblAuteur 	ADD PRIMARY KEY (noAuteur);
ALTER TABLE tblCommande ADD PRIMARY KEY (noCmd);
ALTER TABLE tblLivreCommande	ADD PRIMARY KEY (noLivre, noCmd);
ALTER TABLE tblLivreAuteur	ADD PRIMARY KEY (noLivre, noAuteur);


## Création des contraintes de clé étrangère ou clé migrée

ALTER TABLE tblEmploye 	ADD FOREIGN KEY (noEmploi) REFERENCES tblEmploi (noEmploi);
ALTER TABLE tblEmploye 	ADD FOREIGN KEY (noEditeur) REFERENCES tblEditeur (noEditeur);
ALTER TABLE tblLivre 	ADD FOREIGN KEY (noEditeur) REFERENCES tblEditeur (noEditeur);
ALTER TABLE tblCommande ADD FOREIGN KEY (noMag) REFERENCES tblMagasin (noMag);
ALTER TABLE tblLivreAuteur 	ADD FOREIGN KEY (noLivre) REFERENCES tblLivre (noLivre);
ALTER TABLE tblLivreAuteur 	ADD FOREIGN KEY (noAuteur) REFERENCES tblAuteur (noAuteur);
ALTER TABLE tblLivreCommande 	ADD FOREIGN KEY (noCmd) REFERENCES tblCommande (noCmd);
ALTER TABLE tblLivreCommande 	ADD FOREIGN KEY (noLivre) REFERENCES tblLivre (noLivre);

## Création des contraintes de modification de la valeur de départ
## des clés auto-incrémentées

ALTER TABLE tblEmploi AUTO_INCREMENT = 1;
