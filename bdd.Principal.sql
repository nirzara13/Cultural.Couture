CREATE TABLE Tenues (
   Id_Tenue INT AUTO_INCREMENT PRIMARY KEY,
   NomTenue VARCHAR(255),
   Pays VARCHAR(100),
   Genre VARCHAR(100)
);

CREATE TABLE Accessoires (
    Id_Accessoire INT AUTO_INCREMENT PRIMARY KEY,
    NomAccessoire VARCHAR(100),
    Pays VARCHAR(100)
);

CREATE TABLE pays (
    id_pays INT PRIMARY KEY,
    nom_pays VARCHAR(100) UNIQUE
);

CREATE TABLE utilisateur (
    id_utilisateur INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    motDePasse VARCHAR(255),
    email VARCHAR(50),
    Est_administrateur BOOLEAN DEFAULT FALSE
);


CREATE TABLE photo (
  idP INT NOT NULL AUTO_INCREMENT,
  cheminP VARCHAR(255) DEFAULT NULL,
  Id_Tenue INT DEFAULT NULL,
  Id_Accessoire INT DEFAULT NULL,
  PRIMARY KEY (idP),
  FOREIGN KEY (Id_Tenue) REFERENCES Tenues (Id_Tenue),
  FOREIGN KEY (Id_Accessoire) REFERENCES Accessoires (Id_Accessoire)
);

CREATE TABLE Favoris (
    id_favori INT AUTO_INCREMENT PRIMARY KEY,
    id_utilisateur INT,
    tenue_id INT,
    accessoire_id INT,
    type_contenu ENUM('Tenue', 'Accessoire'),
    date_ajout TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id_utilisateur),
    FOREIGN KEY (tenue_id) REFERENCES Tenues(Id_Tenue),
    FOREIGN KEY (accessoire_id) REFERENCES Accessoires(Id_Accessoire)
);

--> Les Insert 

INSERT INTO pays (id_pays, nom_pays) VALUES
(1, 'Allemagne'),
(2, 'Arabie saoudite'),
(3, 'Brésil'),
(4, 'Corée du Sud'),
(5, 'Chine'),
(6, 'États-Unis'),
(7, 'Espagne'),
(8, 'France'),
(9, 'Inde'),
(10, 'Japon');

INSERT INTO utilisateur (nom, prenom, mdpU, email, id_pays, Est_administrateur) VALUES
('Smith', 'John', 'password123', 'john.smith@example.com', 1, FALSE),
('Garcia', 'Maria', 'pass123', 'maria.garcia@example.com', 2, TRUE),
('Müller', 'Hans', '123456', 'hans.muller@example.com', 3, FALSE),
('Kim', 'Soo', 'p@ssw0rd', 'soo.kim@example.com', 4, FALSE),
('Chen', 'Wei', 'securePW', 'wei.chen@example.com', 5, FALSE),
('Silva', 'Ana', 'password1234', 'ana.silva@example.com', 6, FALSE),
('Kawamura', 'Yuki', 'yuki123', 'yuki.kawamura@example.com', 7, FALSE),
('Singh', 'Raj', 'pass123', 'raj.singh@example.com', 8, FALSE),
('Abdullah', 'Ahmed', 'abc123', 'ahmed.abdullah@example.com', 9, FALSE),
('Dubois', 'Marie', 'mdp123', 'marie.dubois@example.com', 10, FALSE);



-->Amérique du nord
INSERT INTO Tenues (NomTenue, Pays, Genre) VALUES
('Chemise à carreaux', 'Canada', 'Homme'),
('Châle', 'Mexique', 'Femme'),
('Parka', 'Canada', 'Homme'),
('Costume traditionnel inuit', 'Canada', 'Homme'),
('Poncho', 'Mexique', 'Homme'),
('Sarape', 'Mexique', 'Homme');
('Le Gaucho','Argentine''Homme')


-->Amérique du sud
INSERT INTO Tenues (NomTenue, Pays, Genre) VALUES
('Poncho', 'Argentine', 'Homme'),
('Bombacha', 'Uruguay', 'Homme'),
('Robe de quinceañera', 'Mexique', 'Femme'),
('Poncho', 'Chili', 'Homme'),
('Vêtements traditionnels guarani', 'Paraguay', 'Homme'),
('Poncho', 'Bolivie', 'Homme');


-- Europe
INSERT INTO Tenues (NomTenue, Pays, Genre) VALUES 
('Kilt', 'Écosse', 'Homme'),
('Chiton', 'Grèce', 'Femme'),
('Bunad', 'Norvège', 'Homme'),
('Toga', 'Italie', 'Homme'),
('Costume Breton', 'France', 'Homme');

-- Asie
INSERT INTO Tenues (NomTenue, Pays, Genre) VALUES 
('Kimono', 'Japon', 'Femme'),
('Sari', 'Inde', 'Femme'),
('Kurta-Pajama', 'Inde', 'Homme'),
('Qipao', 'Chine', 'Femme'),
('Changshan', 'Chine', 'Homme'),
('Thobe', 'Arabie Saoudite', 'Homme'),
('Abaya', 'Arabie Saoudite', 'Femme'),
('Hanbok', 'Corée du Sud', 'Homme');

-- Afrique
INSERT INTO Tenues (NomTenue, Pays, Genre) VALUES 
('Agbada', 'Nigeria', 'Homme'),
('Iro et Buba', 'Nigeria', 'Femme'),
('Djellaba', 'Maroc', 'Homme'),
('Maasai Shuka', 'Kenya', 'Homme'),
('Kente Cloth', 'Ghana', 'Homme');

-- Amérique
INSERT INTO Tenues (NomTenue, Pays, Genre) VALUES 
('Sombrero', 'Mexique', 'Homme'),
('Poncho', 'Mexique', 'Homme'),
('Poncho', 'Pérou', 'Homme'),
('Aloha Shirt', 'États-Unis', 'Homme'),
('Muumuu', 'États-Unis', 'Femme'),
('Parka', 'Canada', 'Homme'),
('Havaianas', 'Brésil', 'Femme');

-- Océanie
INSERT INTO Tenues (NomTenue, Pays, Genre) VALUES 
('Maori Korowai', 'Nouvelle-Zélande', 'Homme'),
('Hula Skirt', 'Hawaii', 'Femme'),
('Lavalava', 'Samoa', 'Homme'),
('Pareo', 'Tahiti', 'Femme'),
('Akubra Hat', 'Australie', 'Homme');




-- Inserts pour l'Argentine
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (1, 'Chapeaux de gauchos', 'Argentine');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (2, 'Ceintures en cuir décoratives', 'Argentine');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (3, 'Bottes de cuir', 'Argentine');


-- Inserts pour le Brésil (suite)
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (4, 'Bijoux en or (boucles d''oreilles, colliers)', 'Brésil');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (5, 'Coiffures décoratives (pour les femmes)', 'Brésil');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (6, 'Chapeaux de cowboy traditionnels (chapéu de couro)', 'Brésil');

-- Inserts pour le Chili (suite)
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (7, 'Ponchos en laine', 'Chili');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (8, 'Huasos (chapeaux traditionnels)', 'Chili');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (9, 'Écharpes en cachemire', 'Chili');

-- Inserts pour la Colombie (suite)
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (10, 'Sombreros Vueltiaos (chapeaux traditionnels)', 'Colombie');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (11, 'Mochilas (sacs tissés)', 'Colombie');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (12, 'Bijoux en émeraude', 'Colombie');


-- Inserts pour le Costa Rica (suite)
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (13, 'Masques en bois sculpté', 'Costa Rica');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (14, 'Éventails en bambou', 'Costa Rica');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (15, 'Bracelets en graines colorées', 'Costa Rica');


-- Inserts pour le Pérou (suite)
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (16, 'Bijoux en argent ornés de motifs indigènes (boucles d''oreilles, colliers, bracelets)', 'Pérou');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (17, 'Chullos (bonnets) ornés de pompons colorés', 'Pérou');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (18, 'Sacs tissés à la main', 'Pérou');



-- Inserts pour les États-Unis
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (19, 'Chapeaux de cowboys', 'États-Unis');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (20, 'Boucles de ceinture western', 'États-Unis');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (21, 'Lunettes de soleil aviateur', 'États-Unis');


-- Inserts pour le Canada
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (22, 'Toques en laine (tuques)', 'Canada');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (23, 'Mocassins en cuir', 'Canada');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (24, 'Écharpes en laine de caribou', 'Canada');


-- Inserts pour le Mexique  
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (25, 'Sombreros', 'Mexique');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (26, 'Rebozos (châles traditionnels)', 'Mexique');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (27, 'Sandales huaraches', 'Mexique');



-- Inserts pour l'Afghanistan
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (28, 'Châles afghans (patu)', 'Afghanistan');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (30, 'Chapeaux pakols', 'Afghanistan');


-- Inserts pour l'Inde
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (31, 'Bindis (ornements frontaux)', 'Inde');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (32, 'Saris (vêtements traditionnels)', 'Inde');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (33, 'Colliers en perles', 'Inde');


-- Inserts pour le Sri Lanka
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (34, 'Kandyan Sarees', 'Sri Lanka');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (35, 'Kukkus (chapeaux traditionnels)', 'Sri Lanka');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (36, 'Boucles d''oreilles en pierres précieuses', 'Sri Lanka');


-- Inserts pour le Cambodge
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (37, 'Kramas (foulards)', 'Cambodge');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (38, 'Chapeaux de rizière', 'Cambodge');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (39, 'Bracelets en argent', 'Cambodge');


-- Inserts pour la Thaïlande
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (40, 'Châles en soie', 'Thaïlande');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (41, 'Bijoux en ornement éléphant', 'Thaïlande');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (42, 'Chapeaux de paille', 'Thaïlande');


-- Inserts pour la Chine (suite)
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (46, 'Éventails en papier découpé', 'Chine');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (47, 'Bijoux en jade', 'Chine');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (48, 'Parapluies en soie', 'Chine');


-- Inserts pour le Japon (suite)
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (49, 'Obis (ceintures pour kimono)', 'Japon');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (50, 'Zori (sandales en paille)', 'Japon');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (51, 'Tabis (chaussettes traditionnelles)', 'Japon');


-- Inserts pour la France
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (52, 'Bérets', 'France');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (53, 'Foulards en soie', 'France');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (54, 'Sacs à main de créateurs', 'France');



-- Inserts pour l'Allemagne
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (55, 'Bonnets en laine (Schwarzwälder Tracht)', 'Allemagne');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (56, 'Lederhosen (culottes en cuir)', 'Allemagne');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (57, 'Chapeaux de chasse traditionnels', 'Allemagne');



-- Inserts pour l'Italie
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (58, 'Écharpes en cachemire', 'Italie');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (59, 'Bijoux en or et en argent', 'Italie');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (60, 'Sacs à main en cuir de luxe', 'Italie');


-- Inserts pour l'Espagne
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (61, 'Éventails espagnols (abanicos)', 'Espagne');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (62, 'Mantilles (voiles traditionnels)', 'Espagne');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (63, 'Boucles d oreilles en flamenco', 'Espagne');


-- Inserts pour l'Afrique du Sud
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (64, 'Chapeaux de safari', 'Afrique du Sud');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (65, 'Perles traditionnelles', 'Afrique du Sud');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (66, 'Sacs en cuir d autruche', 'Afrique du Sud');



-- Inserts pour le Congo
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (67, 'Coiffes traditionnelles (mukuba)', 'Congo');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (68, 'Colliers en perles', 'Congo');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (69, 'Boucliers en bois sculpté', 'Congo');

-- Inserts pour la Côte d'Ivoire
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (70, 'Masques tribaux', 'Côte d''Ivoire');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (71, 'Bijoux en perles', 'Côte d''Ivoire');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (72, 'Tissus traditionnels (pagne)', 'Côte d''Ivoire');


-- Inserts pour l'Algérie
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (73, 'Chèches (foulards traditionnels)', 'Algérie');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (74, 'Babouches (chaussures traditionnelles)', 'Algérie');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (75, 'Bijoux en argent kabyles', 'Algérie');


-- Inserts pour la Tunisie
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (76, 'Jebbas (robes traditionnelles)', 'Tunisie');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (77, 'Foutas (serviettes en coton)', 'Tunisie');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (78, 'Kachabiya (veste traditionnelle)', 'Tunisie');

-- Inserts pour l'Australie
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (82, 'Chapeaux Akubra', 'Australie');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (83, 'Didgeridoos (instrument aborigène)', 'Australie');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (84, 'Boomerangs', 'Australie');

-- Inserts pour la Nouvelle-Zélande
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (85, 'Maori Pounamu (bijoux en jade)', 'Nouvelle-Zélande');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (86, 'Tā moko (tatouages faciaux maoris)', 'Nouvelle-Zélande');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (87, 'Piupiu (jupes en fibre de flax)', 'Nouvelle-Zélande');


-- Inserts pour la Papouasie-Nouvelle-Guinée
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (88, 'Bilum (sacs tissés)', 'Papouasie-Nouvelle-Guinée');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (89, 'Kundu drums (tambours traditionnels)', 'Papouasie-Nouvelle-Guinée');
INSERT INTO Accessoires (Id_Accessoire, NomAccessoire, Pays) VALUES (90, 'Boucliers de guerre', 'Papouasie-Nouvelle-Guinée');


-- Inserts avec des tenues pour chaque pays avec des ID

-- Tenues pour l'Argentine
INSERT INTO Tenues (Id_Tenue, NomTenue, Pays, Genre) VALUES (100, 'Bombachas', 'Argentine', 'Unisexe');
INSERT INTO Tenues (Id_Tenue, NomTenue, Pays, Genre) VALUES (101, 'Boinas', 'Argentine', 'Unisexe');
INSERT INTO Tenues (Id_Tenue, NomTenue, Pays, Genre) VALUES (102, 'Ponchos', 'Argentine', 'Unisexe');
INSERT INTO Tenues (Id_Tenue, NomTenue, Pays, Genre) VALUES (103, 'Gauchos', 'Argentine', 'Masculin');
INSERT INTO Tenues (Id_Tenue, NomTenue, Pays, Genre) VALUES (104, 'Zapatos de charol', 'Argentine', 'Unisexe');

-- Tenues pour le Brésil
INSERT INTO Tenues (Id_Tenue, NomTenue, Pays, Genre) VALUES (200, 'Vestidos de renda', 'Brésil', 'Féminin');
INSERT INTO Tenues (Id_Tenue, NomTenue, Pays, Genre) VALUES (201, 'Chapéu de couro', 'Brésil', 'Masculin');
INSERT INTO Tenues (Id_Tenue, NomTenue, Pays, Genre) VALUES (202, 'Chinelos', 'Brésil', 'Unisexe');
INSERT INTO Tenues (Id_Tenue, NomTenue, Pays, Genre) VALUES (203, 'Samba costumes', 'Brésil', 'Féminin');


-- Tenues pour la Colombie
INSERT INTO Tenues (Id_Tenue, NomTenue, Pays, Genre) VALUES (400, 'Sombreros vueltiaos', 'Colombie', 'Unisexe');
INSERT INTO Tenues (Id_Tenue, NomTenue, Pays, Genre) VALUES (401, 'Polleras', 'Colombie', 'Féminin');
INSERT INTO Tenues (Id_Tenue, NomTenue, Pays, Genre) VALUES (402, 'Guaraches', 'Colombie', 'Unisexe');
INSERT INTO Tenues (Id_Tenue, NomTenue, Pays, Genre) VALUES (403, 'Ruana', 'Colombie', 'Unisexe');
INSERT INTO Tenues (Id_Tenue, NomTenue, Pays, Genre) VALUES (404, 'Cancan', 'Colombie', 'Féminin');

-- Tenues pour le Costa Rica
INSERT INTO Tenues (Id_Tenue, NomTenue, Pays, Genre) VALUES (500, 'Pajaritas', 'Costa Rica', 'Masculin');
INSERT INTO Tenues (Id_Tenue, NomTenue, Pays, Genre) VALUES (501, 'Peinetas', 'Costa Rica', 'Féminin');
INSERT INTO Tenues (Id_Tenue, NomTenue, Pays, Genre) VALUES (502, 'Ternos', 'Costa Rica', 'Unisexe');
INSERT INTO Tenues (Id_Tenue, NomTenue, Pays, Genre) VALUES (503, 'Guayabera', 'Costa Rica', 'Masculin');
INSERT INTO Tenues (Id_Tenue, NomTenue, Pays, Genre) VALUES (504, 'Enagua', 'Costa Rica', 'Féminin');

-- Tenues pour le Pérou
INSERT INTO Tenues (Id_Tenue, NomTenue, Pays, Genre) VALUES (600, 'Chullos', 'Pérou', 'Unisexe');
INSERT INTO Tenues (Id_Tenue, NomTenue, Pays, Genre) VALUES (601, 'Polleras', 'Pérou', 'Féminin');
INSERT INTO Tenues (Id_Tenue, NomTenue, Pays, Genre) VALUES (602, 'Ponchos', 'Pérou', 'Unisexe');
INSERT INTO Tenues (Id_Tenue, NomTenue, Pays, Genre) VALUES (603, 'Poncho andino', 'Pérou', 'Unisexe');
INSERT INTO Tenues (Id_Tenue, NomTenue, Pays, Genre) VALUES (604, 'Pollera de gala', 'Pérou', 'Féminin');


-- Inserts pour les tenues traditionnelles des trois pays d'Amérique du Nord avec les ID

-- Canada
INSERT INTO Tenues (Id_Tenue, NomTenue, Pays, Genre) VALUES (800, 'Chemise à carreaux', 'Canada', 'Unisexe');
INSERT INTO Tenues (Id_Tenue, NomTenue, Pays, Genre) VALUES (801, 'Tuque', 'Canada', 'Unisexe');

-- Mexique
INSERT INTO Tenues (Id_Tenue, NomTenue, Pays, Genre) VALUES (802, 'Sombrero', 'Mexique', 'Unisexe');
INSERT INTO Tenues (Id_Tenue, NomTenue, Pays, Genre) VALUES (803, 'Poncho', 'Mexique', 'Unisexe');
INSERT INTO Tenues (Id_Tenue, NomTenue, Pays, Genre) VALUES (804, 'Huipil', 'Mexique', 'Féminin');

-- États-Unis
INSERT INTO Tenues (Id_Tenue, NomTenue, Pays, Genre) VALUES (805, 'Costume de cowboy', 'États-Unis', 'Masculin');
INSERT INTO Tenues (Id_Tenue, NomTenue, Pays, Genre) VALUES (806, 'Robe de style western', 'États-Unis', 'Féminin');





