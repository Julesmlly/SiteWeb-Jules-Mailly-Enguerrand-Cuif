<?php
session_start();


require_once 'database.php'; 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['nom_utilisateur'];
    $password = $_POST['mot_de_passe'];

   
    $stmt = $db->prepare("SELECT * FROM utilisateurs WHERE login = ?");
    $stmt->execute([$login]);
    if ($stmt->rowCount() == 1) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if (password_verify($password, $user['mot_de_passe'])) {
            
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_login'] = $user['login'];
            $_SESSION['message'] = "Connexion réussie.";

            header("Location: accueil.php");
            exit;
        } else {
            $_SESSION['message'] = "Mot de passe incorrect.";
            header("Location: connexion.php"); 
            exit;
        }
    } else {
        $_SESSION['message'] = "Utilisateur non trouvé.";
        header("Location: connexion.php"); 
        exit;
    }
} else {
    header("Location: connexion.php");
    exit;
}
?>
