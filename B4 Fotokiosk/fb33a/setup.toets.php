<?php





// Deze file is GEEN onderdeel van de toetsopdracht.
// Niet aanpassen, niet verwijderen.









































if(!file_exists("backend/config.php"))
{
    $possible_apps = array("bioscoop", "bloemist", "boekwinkel", "garage");
    $app_name = $possible_apps[array_rand($possible_apps, 1)];
    if(isset($_GET['force'])) $app_name = $_GET['name'];

    //Write config
    $f = fopen("backend/config.php", "w");
    fwrite($f, "<?php\r\n");
    fwrite($f, "\$app_name = '$app_name';\r\n\r\n");
    fwrite($f, "\$dbHost = 'localhost';\r\n");
    fwrite($f, "\$dbName = '$app_name';\r\n");
    fwrite($f, "\$dbUser = 'root';\r\n");
    fwrite($f, "\$dbPass = '';\r\n\r\n");
    fwrite($f, "//De url waarop jouw project staat. Géén slash aan het einde.\r\n");
    fwrite($f, "\$base_url = 'http://localhost/fb33a';\r\n");
    fwrite($f, "\r\n\r\n\r\n\r\n\r\n//Hieronder niets aanpassen\r\n//De rest van deze file is GEEN onderdeel van de toetsopdracht\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n");
    fwrite($f, '$parent_file = "C:/xampp/htdocs/nakijken/parent.config.php";
if(file_exists($parent_file) && strpos(__DIR__, "nakijken") !== false)
{
    require_once $parent_file;
    $dbHost = $parent["dbHost"];
    $dbUser = $parent["dbUser"];
    $dbPass = $parent["dbPass"];

    $path = str_replace($parent["base_dir"], "", __DIR__);
    $path = str_replace("backend", "", $path);
    $base_url = $parent["base_url"] . $path;
}
');

    fclose($f);

    //Set doc-folder
    foreach($possible_apps as $app)
    {
        if($app != $app_name)
        {
            if(file_exists("doc/$app.sql")) unlink("doc/$app.sql");
            if(file_exists("doc/$app.png")) unlink("doc/$app.png");
            if(file_exists("doc/$app.txt")) unlink("doc/$app.txt");
        }
    }

    echo "Je toets staat klaar! Je hebt casus <strong>$app_name</strong> ontvangen.<br />";
    echo "Let op; je moet nog zelf de database importeren vanuit de doc-map.<br />";
    echo "<a href='index.php'>Naar de hoofdpagina</a>";
    exit;
}

