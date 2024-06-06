<?php
$action = $_POST['action'];

if ($action == "create") {
    // Haal variabelen op, doe inputvalidatie
    $titel = $_POST['titel'];
    if (empty($titel)) {
        die("Vul een titel in");
    }

    $beschrijving = $_POST['beschrijving'];
    if (empty($beschrijving)) {
        die("Vul de beschrijving in");
    }

    $genre = $_POST['genre'];
    if (empty($genre)) {
        die("Kies een genre");
    }

    $leeftijd = $_POST['leeftijd'];
    if (empty($leeftijd) && $leeftijd !== '0') {
        die("Vul een leeftijd in");
    }

    $premiere = isset($_POST['premiere']) ? 1 : 0;

    require_once 'conn.php';
    $query = "INSERT INTO films (titel, beschrijving, genre, leeftijd, premiere) VALUES(:titel, :beschrijving, :genre, :leeftijd, :premiere)";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":titel" => $titel,
        ":beschrijving" => $beschrijving,
        ":genre" => $genre,
        ":leeftijd" => $leeftijd,
        ":premiere" => $premiere
    ]);

    header("Location: ../admin/index.php?msg=Opgeslagen");
    exit;
}

if ($action == "edit") {
    $naam = $_POST['naam'];
    if (empty($naam)) {
        die("Vul een naam in");
    }

    $datum = $_POST['datum'];
    if (empty($datum)) {
        die("Vul de datum in");
    }

    require_once 'conn.php';
    $query = "UPDATE fotos SET naam = :naam, datum = :datum WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":naam" => $naam,
        ":datum" => $datum,
        ":id" => $_POST['id']
    ]);

    header("Location: ../admin/index.php?msg=Aangepast");
    exit;
}

if ($action == "delete") {
    require_once 'conn.php';
    $query = "DELETE FROM fotos WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":id" => $_POST['id']
    ]);

    header("Location: ../admin/index.php?msg=Verwijderd");
    exit;
}
?>
