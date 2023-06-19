<<?php
    include '../connec.php';
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $mp = $_POST['mp'];
  

    $requete = "INSERT INTO parent ( nom, email, mp) VALUES (?, ?, ?)";
    $statement = $pdo->prepare($requete);

    try {
        $statement->execute([ $nom, $email, $mp]);
        header('Location:parent.php?ajoute=ok');
        exit;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
?>

