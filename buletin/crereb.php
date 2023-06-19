<?php
session_start();
    include '../connec.php';
    $nom = $_POST['nom'];
    $parent = $_POST['parent'];
    $classe = $_POST['classe'];
    $moyenne = $_POST['moyenne'];


    $requete = "INSERT INTO bulletin (nom, parent, classe, moyenne) VALUES (?, ?, ?, ?)";
    $statement = $pdo->prepare($requete);

    try {
        $statement->execute([$nom, $parent, $classe, $moyenne ]);
        header('Location:bulletin.php?ajoute=ok');
        exit;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
?>

