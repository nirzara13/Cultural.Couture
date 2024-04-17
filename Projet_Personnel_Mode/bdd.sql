

CREATE TABLE Tenues (
   Id_Tenue INT AUTO_INCREMENT PRIMARY KEY,
   NomTenue VARCHAR(255),
   Pays VARCHAR(100),
   Genre VARCHAR(100)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE Accessoires (
    Id_Accessoire INT AUTO_INCREMENT PRIMARY KEY,
    NomAccessoire VARCHAR(100),
    Pays VARCHAR(100),
    UNIQUE(Id_Accessoire)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE utilisateur (
    id_utilisateur INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    mdpU VARCHAR(15),
    mailU VARCHAR(50),
    pays_id INT,
    nom_pays VARCHAR(100),
    DateInscription DATE,
    statut ENUM('prospect', 'client', 'admin') DEFAULT 'prospect',
    FOREIGN KEY (pays_id) REFERENCES pays(id_pays)
);


CREATE TABLE utilisateur_pays (
    id_utilisateur INT,
    id_pays INT,
    FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id_utilisateur),
    FOREIGN KEY (id_pays) REFERENCES pays(id_pays),
    PRIMARY KEY (id_utilisateur, id_pays)
);



--> Table qui sera peut être utile

CREATE TABLE utilisateur (
    id_utilisateur INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    mdpU VARCHAR(15),
    mailU VARCHAR(50),
    pays_id INT,
    nom_pays VARCHAR(100),
    DateInscription DATE,
    est_administrateur BOOLEAN DEFAULT FALSE, -- Ajout de la colonne est_administrateur
    statut ENUM('prospect', 'client', 'admin') DEFAULT 'prospect',
    FOREIGN KEY (pays_id) REFERENCES pays(id_pays)
);

-->


CREATE TABLE Acceder(
   Id_Client INT,
   Id_Page INT,
   PRIMARY KEY(Id_Client, Id_Page),
   FOREIGN KEY(Id_Client) REFERENCES Client(Id_Client),
   FOREIGN KEY(Id_Page) REFERENCES Page(Id_Page)
); ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE Voir(
   Id_Prospect INT,
   Id_Page INT,
   PRIMARY KEY(Id_Prospect, Id_Page),
   FOREIGN KEY(Id_Prospect) REFERENCES Prospect(Id_Prospect),
   FOREIGN KEY(Id_Page) REFERENCES Page(Id_Page)
); ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE pays (
    id_pays INT AUTO_INCREMENT PRIMARY KEY,
    nom_pays VARCHAR(100) UNIQUE
);





CREATE TABLE `photo` (
  `idP` bigint(20) NOT NULL,
  `cheminP` varchar(255) DEFAULT NULL,
  `idR` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





CREATE TABLE Favoris (
    id_favori INT AUTO_INCREMENT PRIMARY KEY,
    id_utilisateur INT,
    tenue_id INT,
    accessoire_id INT,
    type_contenu ENUM('Tenue', 'Accessoire'),
    date_ajout TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id_utilisateur),
    FOREIGN KEY (tenue_id) REFERENCES Tenues(Id_Tenue),
    FOREIGN KEY (accessoire_id) REFERENCES Accessoires( Id_Accessoire )
);



--> Les Insert
INSERT INTO utilisateurs (nom, prenom, mdpU, mailU, pays, DateInscription, statut) VALUES
('Smith', 'John', 'password123', 'john.smith@example.com', 'États-Unis', '2023-01-15', 'client'),
('Garcia', 'Maria', 'pass123', 'maria.garcia@example.com', 'Espagne', '2023-02-20', 'admin'),
('Müller', 'Hans', '123456', 'hans.muller@example.com', 'Allemagne', '2023-03-10', 'client'),
('Kim', 'Soo', 'p@ssw0rd', 'soo.kim@example.com', 'Corée du Sud', '2023-04-05', 'client'),
('Chen', 'Wei', 'securePW', 'wei.chen@example.com', 'Chine', '2023-05-12', 'client'),
('Silva', 'Ana', 'password1234', 'ana.silva@example.com', 'Brésil', '2023-06-18', 'client'),
('Kawamura', 'Yuki', 'yuki123', 'yuki.kawamura@example.com', 'Japon', '2023-07-22', 'client'),
('Singh', 'Raj', 'pass123', 'raj.singh@example.com', 'Inde', '2023-08-30', 'client'),
('Abdullah', 'Ahmed', 'abc123', 'ahmed.abdullah@example.com', 'Arabie saoudite', '2023-09-05', 'client'),
('Dubois', 'Marie', 'mdp123', 'marie.dubois@example.com', 'France', '2023-10-09', 'client');






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




--Les INSERT pour la table Accessoires
INSERT INTO Accessoires (NomAccessoire, Pays) VALUES
('Montre à gousset', 'Angleterre'),
('Écharpe en cachemire', 'Écosse'),
('Chapeau tyrolien', 'Autriche'),
('Sabots en bois', 'Pays-Bas'),
('Bijoux Massai', 'Kenya'),
('Kufi', 'Afrique de l\'Ouest'),
('Agal', 'Arabie Saoudite'),
('Ombrelle Chinoise', 'Chine'),
('Sandalwood Fan', 'Inde'),
('Jambiya', 'Yémen'),
('Chapeau de Cowboy', 'États-Unis'),
('Polarized Sunglasses', 'Canada'),
('Bolivian Shawl', 'Bolivie'),
('Poncho', 'Pérou');
('Sombrero', 'Mexique'),
('Chullo', 'Pérou'),
('Pampa Poncho', 'Argentine'),
('Bolivian Bowler Hat', 'Bolivie'),
('Caribbean Steelpan', 'Trinidad-et-Tobago'),
('Panama Hat', 'Équateur'),
('Somba Mask', 'Nigéria'),
('Dashiki', 'Ghana'),
('Kanga', 'Tanzanie'),
('Thobe', 'Jordanie'),
('Kufiya', 'Palestine'),
('Abaya', 'Arabie Saoudite'),
('Ta'ovala', 'Tonga'),
('Sarong', 'Indonésie');

('Kimono', 'Japon'),
('Geta', 'Japon'),
('Hanbok', 'Corée du Sud'),
('Ao Dai', 'Vietnam'),
('Phulkari', 'Inde'),
('Dupatta', 'Inde'),
('Mala', 'Inde'),
('Turban', 'Inde'),
('Sari', 'Inde'),
('Salwar Kameez', 'Inde'),
('Tha'ami', 'Myanmar'),
('Sampot', 'Cambodge'),
('Tubao', 'Philippines'),
('Salakot', 'Philippines'),
('Pecí', 'Indonésie'),
('Songkok', 'Indonésie'),
('Ralli Quilt', 'Pakistan'),
('Fez', 'Maroc'),
('Keffiyeh', 'Moyen-Orient'),
('Abaya', 'Moyen-Orient');


ALTER TABLE utilisateur MODIFY COLUMN mdpU VARCHAR(255);
