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
        $query = "SELECT * FROM films";
        $statement = $conn->prepare($query);
        $statement->execute();
        $films = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <table>
            <tr>
                <th>Titel</th>
                <th>Beschrijving</th>
                <th>Aanpassen</th>
            </tr>
            <?php foreach($films as $film): ?>
                <tr>
                    <td><?php echo htmlspecialchars($film['titel']); ?></td>
                    <td><?php echo htmlspecialchars($film['beschrijving']); ?></td>
                    <td><a href="edit.php?id=<?php echo $film['id']; ?>">aanpassen</a></td>
                </tr>
            <?php endforeach; ?>
        </table>

    </div>

</body>

</html>
