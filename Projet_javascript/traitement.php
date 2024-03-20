<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "mysql-fatousamb.alwaysdata.net"
    $username = "fatousamb" 
    $password= "passe123"
    $dbname= "fatousamb_quiz"
    $connexion = new mysqli($servername, $username, $password, $dbname);

    if ($connexion->connect_error) {
        die("Connexion échouée : " . $connexion->connect_error);
    }



    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Préparer et exécuter la requête d'insertion pour l'administrateur
    $sql_admin = "INSERT INTO admin (nom_admin, prenom_admin, login_admin, password_admin) VALUES ('$nom', '$prenom', '$login', '$password')";
    if ($connexion->query($sql_admin) === TRUE) {
        header("Location: Accueil.php"); // Redirection vers la page du quizz
    } else {
        echo "Erreur lors de l'enregistrement de l'administrateur : " . $connexion->error;
    }

    // Préparer et exécuter la requête d'insertion pour le joueur
    $sql_joueur = "INSERT INTO joueur (nom_joueur, prenom_joueur, login_joueur, password_joueur) VALUES ('$nom', '$prenom', '$login', '$password')";
    if ($connexion->query($sql_joueur) === TRUE) {
        header("Location: Accueil.php"); // Redirection vers la page du quizz
    } else {
        echo "Erreur lors de l'enregistrement du joueur : " . $connexion->error;
    }

    // Fermer la connexion
    $connexion->close();
}
?>
