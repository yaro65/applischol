<?php
//echo "la page de suppression";

$idadministrat = $_GET['ida'];
include '../connec.php';
include '../fonction1.php';

$requete = "DELETE FROM parent WHERE id = ?";
$statement = $pdo->prepare($requete);

try {
    $statement->execute([$idadministrat]);
    header('Location: parent.php?supprime=ok');
    exit;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
