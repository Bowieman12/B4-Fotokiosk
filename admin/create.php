<?php 
session_start();
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
        <h3>Nieuw</h3>
        <form action="../backend/adminController.php" method="POST">
            <input type="hidden" name="action" value="create">
            
            <div class="form-group">
                <label for="titel">Titel:</label>
                <input type="text" name="titel" id="titel">
            </div>
            <div class="form-group">
                <label for="beschrijving">Beschrijving:</label>
                <textarea name="beschrijving" id="beschrijving" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="genre">Genre:</label>
                <select name="genre" id="genre">
                    <option value="horror">Horror</option>
                    <option value="romantisch">Romantisch</option>
                    <option value="comedy">Comedy</option>
                </select>
            </div>
            <div class="form-group">
                <label for="leeftijd">Leeftijd:</label>
                <input type="number" name="leeftijd" id="leeftijd">
            </div>
            <div class="form-group">
                <label for="premiere">Première:</label>
                <input type="checkbox" name="premiere" id="premiere">
            </div>
            <!-- Voeg hier eventuele andere invoervelden toe die je nodig hebt voor het maken van een item -->

            <input type="submit" value="Opslaan">
        </form>
    </div>  

</body>

</html>
