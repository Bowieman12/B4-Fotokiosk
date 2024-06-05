<!doctype html>
<html lang="nl">

<?php
session_start();
require_once 'setup.toets.php';
require_once 'backend/config.php';
?>

<!doctype html>
<html lang="nl">

<?php
require_once 'head.php';
?>
<head>
<style>
        body {
            font-family: Arial, sans-serif;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 10px;
            padding: 20px;
        }

        .grid-item {
            background-color: #f9f9f9;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .grid-item.important {
            background-color: #f8d7da;
        }

        .grid-item h4 {
            margin: 0 0 10px;
        }

        .grid-item p {
            margin: 0;
        }
    </style>
</head>
<body>

    <?php require_once 'header.php'; ?>
    
    <div class="container">

        <p style="color: darkgrey;"><strong>DIT ZIJN DE MOOIE FOTO'S DIE GEMAAKT ZIJN!</strong></p>

        <?php
        require_once 'backend/conn.php';
        $query = "SELECT * FROM fotos";
        $statement = $conn->prepare($query);
        $statement->execute();
        $fotos = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <div class="grid-container">
        <?php foreach($fotos as $foto): ?>
            <div class="grid-item <?php if($foto['nieuw']) echo 'important'; ?>">
                <h4><?php echo $foto['titel']; ?></h4>
                <p>Taal: <?php echo $foto['taal']; ?></p>
                <p><?php echo $foto['beschrijving']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>