<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="connexion.css">
    <title>Réservation - Ingé Fest</title>
</head>
<body>
<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>
<?php if (isset($_SESSION['message'])): ?>
    <div class="alert">
        <?php echo $_SESSION['message']; ?>
        <?php unset($_SESSION['message']);?>
    </div>
<?php endif; ?>

    <header>
        <li><a href="accueil.php">Accueil</a></li>
    </header>

    <div class="container">
        <section id="inscription">
            <h2>Inscription</h2>
            <form action="traitement_inscription.php" method="post">
                <label for="login">Identifiant :</label>
                <input type="text" id="login" name="login" required>
            
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required>

                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" required>

                <label for="email">Adresse Email :</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">S'inscrire</button>
            </form>
        </section>

        <section id="connexion">
            <h2>Connexion</h2>
            <form action="traitement_connexion.php" method="post">
                <label for="nom_utilisateur">Nom d'utilisateur :</label>
                <input type="text" id="nom_utilisateur" name="nom_utilisateur" required>
            
                <label for="mot_de_passe">Mot de passe :</label>
                <input type="password" id="mot_de_passe" name="mot_de_passe" required>

                <button type="submit">Se connecter</button>
            </form>
        </section>
    </div>

    <footer>
        <span>© from Jules Mailly/Enguerrand Cuif</span>
        <div id="icons">
            <a href="http://www.twitter.fr"><i class="fa fa-twitter"></i></a>
            <a href="http://www.facebook.fr"><i class="fa fa-facebook"></i></a>
            <a href="http://www.instagram.com"><i class="fa fa-instagram"></i></a>
        </div>
    </footer>
</body>
</html>
