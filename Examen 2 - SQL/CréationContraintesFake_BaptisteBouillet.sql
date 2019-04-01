USE CreationFakeBd_Baptiste_Bouillet;

ALTER TABLE tblArmure 
ADD PRIMARY KEY (noArmure);

ALTER TABLE tblPersonnage 
ADD PRIMARY KEY (noPersonnage);

ALTER TABLE tblClasse
ADD PRIMARY KEY (nomClasse);

ALTER TABLE tblRace
ADD PRIMARY KEY (nomRace);

ALTER TABLE tblArmurePerso
ADD FOREIGN KEY (noArmure) 
REFERENCES tblArmure(noArmure);

ALTER TABLE tblArmurePerso 
ADD FOREIGN KEY (noPersonnage)
REFERENCES tblPersonnage(noPersonnage);

ALTER TABLE tblPersonnage
ADD FOREIGN KEY (racePerso)
REFERENCES tblRace(nomRace);

ALTER TABLE tblPersonnage
ADD FOREIGN KEY (classePerso)
REFERENCES tblClasse(nomClasse);

ALTER TABLE tblArmure AUTO_INCREMENT = 50;

ALTER TABLE tblPersonnage AUTO_INCREMENT = 100;

