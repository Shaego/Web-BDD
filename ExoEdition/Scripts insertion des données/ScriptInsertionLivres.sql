# --------------------------------------------------------
# Script d''insertion des données de la table tblLivre             
# BdEdition
# --------------------------------------------------------

USE BdEdition;

# Insertion des données dans la table tblLivre
# -------------------------------------------

INSERT INTO tblLivre VALUES
('PC8888', 'Les données non triées du Web', 'informatique', 98.75, 47000.00, 15, 6578, 
		'Un aperçu du problème du BIG DATA', '2017-08-23', '1389'),
('BU1032', 'Guide des bases de données du gestionnaire pressé', 'gestion', 140.00, 35000.00, 10, 4095,
		'Vue d''ensemble illustrée des systèmes de gestion de base de données disponibles sur le marché. L''accent est mis sur les applications de gestion courantes.', '2012-02-05', '1389'),
('PS7777', 'Equilibre émotionnel : un nouvel algorithme', 'psychologie', 54.00, 27000.00, 10, 3336,
		'Comment se protéger contre le stress exagéré du monde moderne. Parmi les remèdes proposés : utilisation de l''ordinateur et alim	entation judicieusement choisie.', '2012-02-15', '0736'),
('PS3333', 'Privation durable d''informations : étude de quatre cas représentatifs',  'psychologie', 136.00, 14000.00, 10, 4072,
		'Que se passe-t-il quand les données viennent - manquer ? Analyse scientifique des effets du manque d''information sur les grands consommateurs.', '2014-01-25', '0736'),
('BU1111', 'La cuisine - l''ordinateur : bilans clandestins', 'gestion', 82.00, 34000.00, 10, 3876,
		'Conseils utiles vous permettant de tirer le meilleur parti possible de vos ressources informatiques.', '2009-11-07', '1389'),
('MC2222', 'Les festins de Parly 2', 'cui_moderne', 136.00, 0.00, 12, 2032,
		'Recueil de recettes rapides, faciles et élégantes, testées et goûtées par des gens qui n''ont jamais le temps de manger. Aide précieuse pour le cuisinier occasionnel.',  '2013-10-11', '0877'),
('TC7777', 'La cuisine japonaise - la portée de tous', 'cui_traditio', 102.00, 54000.00, 10, 4095,
		'Comment améliorer sa position sociale en apprenant - cuisiner d''authentiques plats japonais pendant les loisirs. Selon Que Choisir, le nombre de vos amis augmente de 5 - 10 % par recette.', '2013-09-14', '0877'),
('TC4203', 'Cinquante ans dans les cuisines de l''Elysée', 'cui_traditio', 81.00, 27000.00, 14, 15096,
		'Anecdotes inédites sur les coulisses du pouvoir, racontées par le maître queux de l''Elysée. Recettes et techniques sur demande.', '2012-06-05', '0877'),
('PC1035', 'Est-ce vraiment convivial ?', 'informatique', 156.00, 48000.00, 16, 8780,
		'Etude comparative des progiciels les plus répandus. S''adressant aux utilisateurs débutants, cet ouvrage établit un palmarès des logiciels en fonction de leur convivialité.', '2011-01-30', '1389'),
('BU2075', 'Le stress en informatique n''est pas une fatalité !', 'gestion', 24.00, 69000.00, 24, 18722,
		'Exposé des techniques médicales et psychologiques les plus récentes permettant de survivre dans le bureau électronique. Explications claires et détaillées.', '2013-01-18', '0736'),
('PS2091', 'La colère : notre ennemie ?', 'psychologie', 76.00, 15000.00, 12, 2045,
		'Etude approfondie des conséquences somatiques des émotions fortes. De nombreux schémas du métabolisme illustrent l''exposé et en facilitent la compréhension.', '2013-04-02', '0736'),
('PS2106', 'Vivre sans crainte', 'psychologie', 49.00, 41000.00, 10, 111,
		'Comment amortir le choc des interactions quotidiennes par la gymnastique, la méditation et la diététique (nombreux exemples de menus). Bandes vidéo sur commande pour les exercices physiques.', '2005-09-28', '0736'),
('MC3021', 'Les micro-ondes par gourmandise', 'cui_moderne', 21.00, 102000.00, 24, 22246,
		'Adaptation de recettes traditionnelles des provinces fran‡aises - la cuisine au micro-ondes.', '2011-06-13', '0877'),
('TC3218', 'Oignon, poireau et ail : les secrets de la cuisine méditerranéenne', 'cui_traditio', 143.00, 48000.00, 10, 375,
		'Une profusion d''illustrations en couleurs font de cet ouvrage un merveilleux cadeau pour un ami passionné de cuisine.', '2011-10-27', '0877'),
('BU7832', 'Toute la vérité sur les ordinateurs', 'gestion', 136.00, 34000.00, 10, 4095,
		'Analyse commentée des possibilités offertes par les ordinateurs : un guide impartial pour l''utilisateur critique', '2012-07-11', '1389'),
('PS1372', 'Phobie et passion informatique : éventail de comportements', 'psychologie', 147, 48000.00, 10, 375,
		'Lecture indispensable pour le spécialiste : cet ouvrage étudie les différences entre ceux qui détestent et craignent les ordinateurs et ceux qui les trouvent épatants.', '2011-10-01', '0877');