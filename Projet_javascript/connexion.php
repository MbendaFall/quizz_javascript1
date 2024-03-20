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
}
?>