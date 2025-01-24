CREATE DATABASE immobilier;

USE immobilier;

CREATE TABLE immobilier_utilisateurs (
    id_utilisateur INT AUTO_INCREMENT PRIMARY KEY,
    nom_utilisateur VARCHAR(50) NOT NULL,
    prenom_utilisateur VARCHAR(50) NOT NULL,
    telephone_utilisateur VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL,
    est_admin BOOLEAN NOT NULL DEFAULT false,
    cree_a TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    photo VARCHAR(255)
);

CREATE TABLE immobilier_type_de_propriete (
  id_type INT PRIMARY KEY NOT NULL,
  nom_du_type VARCHAR(50) NOT NULL
);

CREATE TABLE immobilier_propriete (
  id_propriete INT AUTO_INCREMENT PRIMARY KEY,
  id_type INT NOT NULL,
  nom_propriete VARCHAR(100) NOT NULL,
  nombre_de_chambres INT NOT NULL,
  loyer_quotidien FLOAT NOT NULL DEFAULT 0,
  quartier VARCHAR(100) NOT NULL DEFAULT '',
  description TEXT NOT NULL,
  FOREIGN KEY (id_type) REFERENCES immobilier_type_de_propriete(id_type)
);

CREATE TABLE immobilier_disponibilite (
  id_disponibilite INT AUTO_INCREMENT PRIMARY KEY,
  id_propriete INT NOT NULL,
  id_admin INT NOT NULL,
  date_de_debut DATE DEFAULT CURRENT_TIMESTAMP,
  date_de_fin DATE DEFAULT CURRENT_TIMESTAMP,
  date_modification TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (id_propriete) REFERENCES immobilier_propriete(id_propriete),
  FOREIGN KEY (id_admin) REFERENCES immobilier_utilisateurs(id_utilisateur)
);

CREATE TABLE immobilier_photo (
  id_photo INT AUTO_INCREMENT PRIMARY KEY,
  id_propriete INT NOT NULL,
  url VARCHAR(255) NOT NULL DEFAULT 'erreur.png',
  FOREIGN KEY (id_propriete) REFERENCES immobilier_propriete(id_propriete)
);

CREATE TABLE immobilier_location (
  id_location INT AUTO_INCREMENT PRIMARY KEY,
  id_propriete INT NOT NULL,
  id_utilisateur INT NOT NULL,
  date_de_debut DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
  date_de_fin DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
  date_de_reservation DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (id_propriete) REFERENCES immobilier_propriete(id_propriete),
  FOREIGN KEY (id_utilisateur) REFERENCES immobilier_utilisateurs(id_utilisateur)
);

CREATE TABLE immobilier_favoris (
  id_propriete INT NOT NULL,
  id_utilisateur INT NOT NULL,
  PRIMARY KEY (id_propriete, id_utilisateur),
  FOREIGN KEY (id_propriete) REFERENCES immobilier_propriete(id_propriete),
  FOREIGN KEY (id_utilisateur) REFERENCES immobilier_utilisateurs(id_utilisateur)
);
