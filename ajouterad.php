<<?php
    include 'connec.php';

    $email = $_POST['email'];
    $mp = $_POST['mp'];
    $nom = $_POST['nom'];

    $requete = "INSERT INTO administrat (email, mp, nom) VALUES (?, ?, ?)";
    $statement = $pdo->prepare($requete);

    try {
        $statement->execute([$email, $mp, $nom]);
        header('Location: indes.php?ajoute=ok');
        exit;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
?>

