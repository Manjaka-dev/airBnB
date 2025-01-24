create DATABASE immobilier;

use immobilier;

CREATE TABLE immobilier_utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom_utilisateur VARCHAR(50) NOT NULL,
    prenom_utilisateur VARCHAR(50) NOT NULL,
    telephone_utilisateur VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL,
    est_admin BOOLEAN NOT NULL DEFAULT false,
    cree_a TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    photo VARCHAR(255)
);




