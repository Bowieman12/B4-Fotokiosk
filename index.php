<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geselecteerde Foto's</title>
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
            position: relative;
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

        .grid-item .photo-title {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: rgba(255, 255, 255, 0.7);
            padding: 5px;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
            text-align: left;
            width: calc(100% - 20px); /* Neem de volledige breedte van het grid-item, verminderd met de padding */
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
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

    <?php require_once 'header.php'; ?>
    
    <div class="container">
        <div class="frontpage">
            <h1 style="color: darkgrey;"><strong>Welkom tot de Fotokiosk!</strong></h1>
            <img src="img/logo-big-fill-only.png" alt="developerland logo">
        </div>

        <div class="grid-container" id="photo-grid">
            <?php
            // Toon slechts 3x3 foto's in de grid
            for ($i = 0; $i < min(6, count($photos)); $i++): 
                $photo = $photos[$i]; // Foto ophalen op basis van index
                // Geef elke foto een uniek ID op basis van de bestandsnaam
                $photoID = hash('crc32', basename($photo));
            ?>
                <div class="grid-item">
                    <span class="photo-title"><?php echo basename($photo); ?></span>
                    <a href="koop_foto.php?photo=<?php echo urlencode(basename($photo)); ?>">
                        <img src="<?php echo htmlspecialchars($photo); ?>" alt="Foto <?php echo $photoID; ?>">
                    </a>
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

            setInterval(showNextPhotos, 60000); // Wissel elke 60 seconden
            showNextPhotos();
        });
    </script>
</body>
</html>
