<?php
session_start();
require_once 'database.php'; 

if (!isset($_SESSION['user_id'])) {
    header('Location: connexion.php');
    exit;
}


$nom = $_POST['nom'];
$typePasse = $_POST['type_passe'];
$jourReservation = $_POST['jour_reservation'];
$nombreBillets = $_POST['nombre_billets'];
$commentaire = $_POST['commentaire'];
$userId = $_SESSION['user_id'];

try {
    $stmt = $db->prepare("INSERT INTO reservations (nom, type_passe, jour_reservation, nb_places, commentaire) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$nom, $typePasse, $jourReservation, $nombreBillets, $commentaire]);

    $reservationId = $db->lastInsertId();

    $stmt = $db->prepare("INSERT INTO reservation_utilisateur (id_utilisateur, id_reservation) VALUES (?, ?)");
    $stmt->execute([$userId, $reservationId]);

    header('Location: recapitulatif.php?reservation_id=' . $reservationId);
    exit;
} catch (PDOException $e) {
    die("Erreur lors de la réservation : " . $e->getMessage());
}
?>
