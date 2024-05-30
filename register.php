<!doctype html>
<html lang="nl">

<head>
    <title>StoringApp</title>
    <link rel="stylesheet" href="css/main.css" type="text/css">
</head>

<body>

    <?php require_once 'header.php'; ?>
    
    <div class="container home">
        
        <?php if(isset($_GET['msg'])): ?>
            <div class='msg'><?php echo htmlspecialchars($_GET['msg']); ?></div>
        <?php endif; ?>

        <h2>Registreer je voor het adminsysteem</h2>
        
        <form action="backend/registerController.php" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            </div>
            <div class="form-group">
                <label for="password_check">Password check:</label>
                <input type="password" name="password_check" id="password_check">
            </div>
            <input type="submit" value="Registreer">
        </form>

    </div>

</body>

</html>
