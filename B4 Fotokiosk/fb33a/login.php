<!doctype html>
<html lang="nl">

<head>
    <title>Toets FB33</title>
    <link rel="stylesheet" href="css/main.css" type="text/css">
</head>

<body>

    <?php require_once 'header.php'; ?>
    
    <div class="container home">
        
        <?php if(isset($_GET['msg']))
        {
            echo "<div class='msg'>" . $_GET['msg'] . "</div>";
        } ?>

        <h2>Log in het adminsysteem</h2>
        
        <form action="backend/loginController.php" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password">
            </div>
            <input type="submit" value="Inloggen">
        </form>


    </div>

</body>

</html>
