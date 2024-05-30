<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit;
}

require_once '../backend/config.php';
?>

<!doctype html>
<html lang="nl">
<head>
    <title>TOETS <?php echo ucfirst($app_name); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/main.css">
    <link rel="icon" href="<?php echo $base_url; ?>/favicon.ico" type="image/x-icon" />
</head>
<body>
    <?php require_once '../header.php'; ?>

    <div class="container">
        <h3>Aanpassen</h3>
        <?php
        // Haal id uit de URL
        $id = $_GET['id'];

        // Voer query uit
        require_once '../backend/conn.php';
        $query = "SELECT * FROM films WHERE id = :id";
        $statement = $conn->prepare($query);
        $statement->execute([":id" => $id]);
        $film = $statement->fetch(PDO::FETCH_ASSOC);
        ?>

        <!-- Formulier voor edit: -->
        <form action="../backend/adminController.php" method="POST">
            <input type="hidden" name="action" value="edit">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            
            <div class="form-group">
                <label for="titel">Titel:</label>
                <input type="text" name="titel" id="titel" value="<?php echo htmlspecialchars($film['titel']); ?>">
            </div>
            <div class="form-group">
                <label for="beschrijving">Beschrijving:</label>
                <textarea name="beschrijving" id="beschrijving" cols="30" rows="10"><?php echo htmlspecialchars($film['beschrijving']); ?></textarea>
            </div>
            <div class="form-group">
                <label for="genre">Genre:</label>
                <select name="genre" id="genre">
                    <option value="horror" <?php if ($film['genre'] == 'horror') echo 'selected'; ?>>Horror</option>
                    <option value="romantisch" <?php if ($film['genre'] == 'romantisch') echo 'selected'; ?>>Romantisch</option>
                    <option value="comedy" <?php if ($film['genre'] == 'comedy') echo 'selected'; ?>>Comedy</option>
                </select>
            </div>
            <div class="form-group">
                <label for="leeftijd">Leeftijd:</label>
                <input type="number" name="leeftijd" id="leeftijd" value="<?php echo htmlspecialchars($film['leeftijd']); ?>">
            </div>
            <div class="form-group">
                <label for="premiere">Première:</label>
                <input type="checkbox" name="premiere" id="premiere" <?php if ($film['premiere']) echo 'checked'; ?>>
            </div>
            <input type="submit" value="Opslaan">
        </form>

        <!-- Formulier voor delete: -->
        <form action="../backend/adminController.php" method="POST">
            <input type="hidden" name="action" value="delete">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" value="Verwijderen">
        </form>
    </div>  
</body>
</html>
