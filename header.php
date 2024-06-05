<?php require_once 'backend/config.php'; ?>
<header>
    <div class="container">
        <h1><span>B4 - Fotokiosk</h1>
        <nav>
            <a href="<?php echo $base_url; ?>/index.php">Publiek</a> | 
            <?php if(isset($_SESSION['user_id'])): ?>
                <a href="<?php echo $base_url; ?>/admin/index.php">Admin</a> |
                <a href="<?php echo $base_url; ?>/logout.php">Uitloggen</a>
            <?php else:?>
                <a href="<?php echo $base_url; ?>/login.php">Inloggen</a>
                <a href="<?php echo $base_url; ?>/register.php">Registreren</a>
            <?php endif;?>
        </nav>
    </div>
</header>