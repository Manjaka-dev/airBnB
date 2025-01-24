<?php

namespace app\models;

use Flight;

class UserModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function inscrireUtilisateur($firstName, $secondName, $phoneNumber, $emailAddress, $password, $confirmPassword,$isAdmin) {
        if ($password === $confirmPassword) {
            $query = "SELECT * FROM immobilier_utilisateurs WHERE email = :email";
            $stmt = $this->db->prepare($query);
            $stmt->execute(['email' => $emailAddress]);
    
            if ($stmt->rowCount() > 0) {
                return "Cet utilisateur existe déjà";
            } else {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
                $query = "INSERT INTO immobilier_utilisateurs 
                          (nom_utilisateur, prenom_utilisateur, telephone_utilisateur, email, mot_de_passe,est_admin , cree_a) 
                          VALUES (:nom, :prenom, :num, :email, :mdp, :isAdmin, NOW())";
                $stmt = $this->db->prepare($query);
                $result = $stmt->execute([
                    'nom' => $firstName,
                    'prenom' => $secondName,
                    'num' => $phoneNumber,
                    'email' => $emailAddress,
                    'mdp' => $hashedPassword,
                    'isAdmin' => $isAdmin
                ]);
    
                if ($result) {
                    return true;
                } else {
                    return "Erreur lors de l'inscription";
                }
            }
        } else {
            return "La confirmation du mot de passe est incorrecte";
        }
    }
    
    public function connecterUtilisateur($emailAddress, $password, $isAdmin) {
        $query = "SELECT mot_de_passe FROM immobilier_utilisateurs WHERE email = :email AND est_admin = :isAdmin";
        $stmt = $this->db->prepare($query);
        $stmt->execute(['email' => $emailAddress, 'isAdmin' => $isAdmin]);
    
        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch();
            $hashedPassword = $user['mot_de_passe'];
    
            if (password_verify($password, $hashedPassword)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    

    

    
}
