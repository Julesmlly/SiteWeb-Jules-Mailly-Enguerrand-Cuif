<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Réservation - Ingé Fest</title>
    <link rel="stylesheet" href="reservation.css">
</head>
<body>
    <header>
        <li><a href="accueil.php">Accueil</a></li>
    </header>
    <section id="reservation">
        <h2>Réservez vos billets</h2>
        <form action="traitement_reservation.php" method="post">
            <label for="nom">Prénom ou nom de famille :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="type_passe">Type de passe :</label>
            <select id="type_passe" name="type_passe">
                <option value="normal">Normal</option>
                <option value="vip">VIP</option>
            </select>

            <label for="jour_reservation">Jour à réserver :</label>
            <select id="jour_reservation" name="jour_reservation">
                <option value="vendredi">Vendredi</option>
                <option value="samedi">Samedi</option>
                <option value="dimanche">Dimanche</option>
            </select>

            <label for="nombre_billets">Quantité de places :</label>
            <input type="number" id="nombre_billets" name="nombre_billets" min="1" required>

            <label for="commentaire">Commentaire :</label>
            <textarea id="commentaire" name="commentaire"></textarea>

            <button type="submit">Valider</button>
        </form>
    </section>
</body>
</html>
