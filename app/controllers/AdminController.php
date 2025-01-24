<?php
namespace app\controllers;

use app\models\UserModel;
use Flight;

class AdminController {

    public function getLogin() {
        if (isset($_SESSION['idUser'])) {
            session_destroy();
        }
        Flight::render('log-in-admin');
    }

    public function getInscription() {
        Flight::render('sign-in-admin');
    }

    public function getAccueilAdmin() {
        Flight::render('accueil');
    }

    public function register() {

        // Correspondance avec les noms HTML existants
        $prenom_utilisateur = $_POST['first_name'];
        $nom_utilisateur = $_POST['second_name'];
        $numero = $_POST['num'];
        $email = $_POST['mail'];
        $mot_de_passe = $_POST['pwd'];
        $confirmation_mot_de_passe = $_POST['pwdd'];

        // Appel à la méthode d'inscription
        $result = Flight::UserModel()->inscrireUtilisateur($nom_utilisateur, $prenom_utilisateur, $numero, $email, $mot_de_passe, $confirmation_mot_de_passe,1);

        if ($result === true) {
            Flight::redirect('/admin/log-in');
        } else {
            Flight::render('sign-in-admin', ['error' => $result]);
        }
    }

    public function login() {
        $user = new UserModel(Flight::db());

        $email = $_POST['mail']; // Correspondance avec le champ HTML
        $mot_de_passe = $_POST['pwd']; // Correspondance avec le champ HTML

        $result = $user->connecterUtilisateur($email, $mot_de_passe,1);
        print_r($result);
        if ($result === true) {
            Flight::redirect('/admin/accueil');
        } else {
            Flight::render('log-in-admin', ['error' => 'Email ou mot de passe incorrect']);
        }
    }
}
