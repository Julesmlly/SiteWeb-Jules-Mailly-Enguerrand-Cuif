<?php
session_start();
require_once 'database.php'; 

if (!isset($_GET['reservation_id']) || !isset($_SESSION['user_id'])) {
    echo "Aucune réservation spécifiée ou utilisateur non connecté.";
    exit;
}

$reservationId = $_GET['reservation_id'];
$userId = $_SESSION['user_id'];

try {
    $stmt = $db->prepare("SELECT r.*, ru.id_utilisateur 
                          FROM reservations r
                          JOIN reservation_utilisateur ru ON r.id = ru.id_reservation 
                          WHERE r.id = ? AND ru.id_utilisateur = ?");
    $stmt->execute([$reservationId, $userId]);
    $reservation = $stmt->fetch();

    if (!$reservation) {
        echo "Réservation introuvable ou vous n'avez pas le droit de voir cette réservation.";
        exit;
    }
} catch (PDOException $e) {
    die("Erreur lors de la récupération des informations : " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Récapitulatif de Réservation - Ingé Fest</title>
    <link rel="stylesheet" href="recapitulatif.css">
</head>
<body>
    <div class="container">
        <h1>Récapitulatif de votre réservation</h1>
        <p><strong>Nom:</strong> <?php echo htmlspecialchars($reservation['nom']); ?></p>
        <p><strong>Type de passe:</strong> <?php echo htmlspecialchars($reservation['type_passe']); ?></p>
        <p><strong>Jour réservé:</strong> <?php echo htmlspecialchars($reservation['jour_reservation']); ?></p>
        <p><strong>Quantité de places:</strong> <?php echo htmlspecialchars($reservation['nb_places']); ?></p>
        <p><strong>Commentaire:</strong> <?php echo nl2br(htmlspecialchars($reservation['commentaire'])); ?></p>
        <a href="accueil.php">Retour à l'accueil</a>
    </div>
</body>
</html>
