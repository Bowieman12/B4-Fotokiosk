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
    <title>B4-Fotokiosk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/main.css">
    <link rel="icon" href="<?php echo $base_url; ?>/favicon.ico" type="image/x-icon" />
</head>
<body>
    <?php require_once '../header.php'; ?>

    <div class="container">
        <h3>Edit</h3>
        <?php
        // Haal id uit de URL
        $id = $_GET['id'];

        // Voer query uit
        require_once '../backend/conn.php';
        $query = "SELECT * FROM fotos WHERE id = :id";
        $statement = $conn->prepare($query);
        $statement->execute([":id" => $id]);
        $fotos = $statement->fetch(PDO::FETCH_ASSOC);
        ?>

        <!-- Formulier voor edit: -->
        <form action="../backend/adminController.php" method="POST">
            <input type="hidden" name="action" value="edit">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            
            <div class="form-group">
                <label for="naam">Naam:</label>
                <input type="text" name="naam" id="naam" value="<?php echo htmlspecialchars($foto['naam']); ?>">
            </div>
            <div class="form-group">
                <label for="datum">Datum:</label>
                <textarea name="datum" id="datum" cols="30" rows="10"><?php echo htmlspecialchars($foto['Datum']); ?></textarea>
            </div>
\

        <!-- Formulier voor delete: -->
        <form action="../backend/adminController.php" method="POST">
            <input type="hidden" name="action" value="delete">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" value="Verwijderen">
        </form>
    </div>  
</body>
</html>
