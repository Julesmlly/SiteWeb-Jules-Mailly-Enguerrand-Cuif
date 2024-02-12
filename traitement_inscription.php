<?php
session_start(); 

require_once 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password']; 

    $stmt = $db->prepare("SELECT * FROM utilisateurs WHERE login = ?");
    $stmt->execute([$login]);
    if ($stmt->rowCount() > 0) {
        $_SESSION['message'] = "Utilisateur existe déjà.";
        header('Location: connexion.php'); 
        exit;
    } else {
        $stmt = $db->prepare("INSERT INTO utilisateurs (login, nom, prenom, mot_de_passe) VALUES (?, ?, ?, ?)");
        $passwordHash = password_hash($password, PASSWORD_DEFAULT); 
        if ($stmt->execute([$login, $nom, $prenom, $passwordHash])) {
            $_SESSION['message'] = "Inscription réussie.";
        } else {
            $_SESSION['message'] = "Erreur lors de l'inscription.";
        }
        header('Location: connexion.php'); 
        exit;
    }
} else {
    header('Location: connexion.php');
    exit;
}
?>
