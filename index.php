<!doctype html>
<html lang="nl">

<?php
session_start();
require_once 'setup.toets.php';
require_once 'backend/config.php';
require_once 'head.php';

// Foto's ophalen uit de map fotos/0_Zondag/
$directory = 'fotos/0_Zondag/';
$photos = glob($directory . "*.jpg");
$photos = array_merge($photos, glob($directory . "*.jpeg"));
$photos = array_merge($photos, glob($directory . "*.png"));
?>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            padding: 20px;
        }

        .grid-item {
            background-color: #f9f9f9;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-align: center;
        }

        .grid-item img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .frontpage {
            text-align: center;
        }

        .frontpage img {
            margin-top: 100px;
        }
    </style>
</head>
<body>

    <?php require_once 'header.php'; ?>
    
    <div class="container">
        <div class="frontpage">
            <h1 style="color: darkgrey;"><strong>Welkom tot de Fotokiosk!</strong></h1>
            <img src="img/logo-big-fill-only.png" alt="developerland logo">
        </div>

        <div class="grid-container" id="photo-grid">
            <?php
            // Toon de eerste 9 foto's in de grid
            for ($i = 0; $i < 9; $i++): 
                $photo = $photos[$i % count($photos)]; // Zorg ervoor dat er altijd 9 foto's worden getoond
            ?>
                <div class="grid-item">
                    <img src="<?php echo htmlspecialchars($photo); ?>" alt="Foto <?php echo $i + 1; ?>">
                </div>
            <?php endfor; ?>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const gridItems = document.querySelectorAll('.grid-item img');
            const photos = <?php echo json_encode(array_map('basename', $photos)); ?>;
            let currentIndex = 0;

            function showNextPhotos() {
                for (let i = 0; i < gridItems.length; i++) {
                    let imgIndex = (currentIndex + i) % photos.length;
                    gridItems[i].src = '<?php echo $directory; ?>' + photos[imgIndex];
                }
                currentIndex = (currentIndex + gridItems.length) % photos.length;
            }

            setInterval(showNextPhotos, 60000);
            showNextPhotos();
        });
    </script>
</body>
</html>
