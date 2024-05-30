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
    $query = "UPDATE films SET titel = :titel, beschrijving = :beschrijving, genre = :genre, leeftijd = :leeftijd, premiere = :premiere WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":titel" => $titel,
        ":beschrijving" => $beschrijving,
        ":genre" => $genre,
        ":leeftijd" => $leeftijd,
        ":premiere" => $premiere,
        ":id" => $_POST['id']
    ]);

    header("Location: ../admin/index.php?msg=Aangepast");
    exit;
}

if ($action == "delete") {
    require_once 'conn.php';
    $query = "DELETE FROM films WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":id" => $_POST['id']
    ]);

    header("Location: ../admin/index.php?msg=Verwijderd");
    exit;
}
?>
