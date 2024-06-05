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

        <p style="color: darkgrey;"><strong>DIT IS DE CRUD-INDEX, DE PAGINA MET TABEL</strong></p>
        <p><a href="create.php">+ nieuw</a></p>

        <?php
        require_once '../backend/conn.php';
        $query = "SELECT * FROM fotos";
        $statement = $conn->prepare($query);
        $statement->execute();
        $fotos = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <table>
            <tr>
                <th>Naam</th>
                <th>Datum</th>
                <th>Aanpassen</th>
            </tr>
            <?php foreach($fotos as $foto): ?>
                <tr>
                    <td><?php echo htmlspecialchars($foto['naam']); ?></td>
                    <td><?php echo htmlspecialchars($foto['datum']); ?></td>
                    <td><a href="edit.php?id=<?php echo $foto['id']; ?>">aanpassen</a></td>
                </tr>
            <?php endforeach; ?>
        </table>

    </div>

</body>

</html>
