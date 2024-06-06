<?php
session_start();
require_once 'setup.toets.php';
require_once 'backend/config.php';
require_once 'head.php';

// Controleer of er een foto is geselecteerd
if (isset($_GET['photo'])) {
    $photo = basename($_GET['photo']);
    $directory = 'fotos/0_Zondag/';
    $photoPath = $directory . $photo;

    // Controleer of het bestand echt bestaat
    if (!file_exists($photoPath)) {
        die("Foto niet gevonden.");
    }
} else {
    die("Geen foto geselecteerd.");
}
?>

<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koop Foto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }

        .photo-container {
            display: inline-block;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .photo-container img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .photo-title {
            font-size: 18px;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Geselecteerde Foto</h1>
    <div class="photo-container">
        <img src="<?php echo htmlspecialchars($photoPath); ?>" alt="Geselecteerde Foto">
        <p class="photo-title"><?php echo htmlspecialchars($photo); ?></p>
    </div>
</body>
</html>
