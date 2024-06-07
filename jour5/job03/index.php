<?php
// Paramètres de connexion à la base de données
$dsn = 'mysql:host=localhost;dbname=jour05';
$username = 'root';
$password = '';

try {
    // Connexion à la base de données
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête SQL pour récupérer toutes les informations de la table 'etudiant'
    $sql = 'SELECT * FROM etudiant';
    $stmt = $pdo->query($sql);

    // Récupérer les résultats
    $etudiants = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo 'Erreur de connexion : ' . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des étudiants</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Liste des étudiants</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Date de Naissance</th>
                <th>Sexe</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($etudiants)): ?>
                <?php foreach ($etudiants as $etudiant): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($etudiant['id']); ?></td>
                        <td><?php echo htmlspecialchars($etudiant['prenom']); ?></td>
                        <td><?php echo htmlspecialchars($etudiant['nom']); ?></td>
                        <td><?php echo htmlspecialchars($etudiant['naissance']); ?></td>
                        <td><?php echo htmlspecialchars($etudiant['sexe']); ?></td>
                        <td><?php echo htmlspecialc
