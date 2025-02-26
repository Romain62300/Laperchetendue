<?php
$host = "127.0.0.1"; // Adresse du serveur MySQL (localhost ou 127.0.0.1)
$user = "root"; // Identifiant MySQL (par défaut root sous WAMP)
$password = ""; // Mot de passe (laisser vide sous WAMP)
$dbname = "la_perche_tendue"; // Nom de la base de données

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données: " . $e->getMessage());
}
?>
