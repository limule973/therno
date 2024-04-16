<?php
$serveur = "localhost";
$utilisateur = "root";
$motDePasse = "";
$baseDeDonnée = "walpa";

$connexion = mysqli_connect($serveur, $utilisateur, $motDePasse, $baseDeDonnée);

if ($connexion->connect_error) {
    die("La connexion a échoué : " . $connexion->connect_error);
}


//récupère les donné de la base
$ID_livre = @$_POST['id_membre'];
$Titre = @$_POST['nom'];
$Auteur = @$_POST['prenom'];
$Annee_publication = @$_POST['Date_naissance'];
$Genre = @$_POST['Adresse'];
$ISBN = @$_POST['Email'];
$Nombre_pages = @$_POST['Telephone'];
$Editeur = @$_POST['Date_inscription'];


?>

<?php

$sql = "SELECT * FROM membres join emprunts on membres.id = emprunts.id";

if ($connexion ->query($sql) === TRUE) {
    echo "succès";
} else{
    echo "erreur".$connexion ->error;
}
?>

<?php

$result = mysqli_query($connexion, "SELECT * FROM membres");
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row["ID_membre"]."</td>";
    echo "<td>".$row["Nom"]."</td>";
    echo "<td>".$row["Prenom"]."</td>";
    echo "<td>".$row["Date_naissance"]."</td>";
    echo "<td>".$row["Adresse"]."</td>";
    echo "<td>".$row["Email"]."</td>";
    echo "<td>".$row["Telephone"]."</td>";
    echo "<td>".$row["Date_inscription"]."</td>";
    echo "</tr>";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des Emprunts</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
        <table>
        <tr>
        
    </style>
</head>
<body>