CREATE TABLE Utilisateur(
   id_utilisateur INT,
   nom VARCHAR(50),
   prenom VARCHAR(50),
   motDePasse VARCHAR(200),
   email VARCHAR(200),
   Est_administrateur LOGICAL,
   PRIMARY KEY(id_utilisateur),
   UNIQUE(motDePasse),
   UNIQUE(email)
);

CREATE TABLE Tenues(
   Id_Tenue INT,
   NomTenue VARCHAR(50),
   Pays VARCHAR(50),
   Genre VARCHAR(50),
   PRIMARY KEY(Id_Tenue)
);

CREATE TABLE Accessoires(
   Id_Accessoire INT,
   NomAccessoire VARCHAR(100),
   Pays VARCHAR(50),
   PRIMARY KEY(Id_Accessoire)
);

CREATE TABLE Favoris(
   Id_Favoris INT,
   Id_utilisateur INT,
   tenue_id INT,
   accessoire_id INT,
   type_contenu_ENUM VARCHAR(50),
   date_ajout_ DATE,
   id_utilisateur_1 INT NOT NULL,
   PRIMARY KEY(Id_Favoris),
   FOREIGN KEY(id_utilisateur_1) REFERENCES Utilisateur(id_utilisateur)
);

CREATE TABLE Photo(
   Id_Photo INT,
   cheminP VARCHAR(70),
   Id_Tenue INT,
   Id_Accessoire INT,
   Id_Tenue_1 INT NOT NULL,
   Id_Accessoire_1 INT NOT NULL,
   PRIMARY KEY(Id_Photo),
   FOREIGN KEY(Id_Tenue_1) REFERENCES Tenues(Id_Tenue),
   FOREIGN KEY(Id_Accessoire_1) REFERENCES Accessoires(Id_Accessoire)
);

CREATE TABLE Favoriser(
   id_utilisateur INT,
   Id_Tenue INT,
   Id_Accessoire INT,
   PRIMARY KEY(id_utilisateur, Id_Tenue, Id_Accessoire),
   FOREIGN KEY(id_utilisateur) REFERENCES Utilisateur(id_utilisateur),
   FOREIGN KEY(Id_Tenue) REFERENCES Tenues(Id_Tenue),
   FOREIGN KEY(Id_Accessoire) REFERENCES Accessoires(Id_Accessoire)
);

CREATE TABLE Concerner(
   Id_Tenue INT,
   Id_Favoris INT,
   PRIMARY KEY(Id_Tenue, Id_Favoris),
   FOREIGN KEY(Id_Tenue) REFERENCES Tenues(Id_Tenue),
   FOREIGN KEY(Id_Favoris) REFERENCES Favoris(Id_Favoris)
);

CREATE TABLE Dependre(
   Id_Accessoire INT,
   Id_Favoris INT,
   PRIMARY KEY(Id_Accessoire, Id_Favoris),
   FOREIGN KEY(Id_Accessoire) REFERENCES Accessoires(Id_Accessoire),
   FOREIGN KEY(Id_Favoris) REFERENCES Favoris(Id_Favoris)
);
