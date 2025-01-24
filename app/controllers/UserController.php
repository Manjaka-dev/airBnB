<?php
namespace app\controllers;

use app\models\UserModel;
use Flight;

class UserController {

    public function getLogin() {
        if (isset($_SESSION['idUser'])) {
            session_destroy();
        }
        Flight::render('log-in');
    }

    public function getInscription() {
        Flight::render('sign-in');
    }

    public function getAcceuilUser() {
        Flight::render('list-housing');
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
        $result = Flight::UserModel()->inscrireUtilisateur($nom_utilisateur, $prenom_utilisateur, $numero, $email, $mot_de_passe, $confirmation_mot_de_passe,0);

        if ($result === true) {
            Flight::redirect('/user/log-in');
        } else {
            Flight::render('sign-in', ['error' => $result]);
        }
    }

    public function login() {
        $user = new UserModel(Flight::db());

        $email = $_POST['mail']; // Correspondance avec le champ HTML
        $mot_de_passe = $_POST['pwd']; // Correspondance avec le champ HTML

        $result = $user->connecterUtilisateur($email, $mot_de_passe,0);
        if ($result === true) {
            Flight::redirect('/user/accueil');
        } else {
            Flight::render('log-in', ['error' => 'Email ou mot de passe incorrect']);
        }
    }
}
