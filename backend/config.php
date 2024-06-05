<?php
$app_name = 'bioscoop';

$dbHost = 'localhost';
$dbName = 'bioscoop';
$dbUser = 'root';
$dbPass = '';

//De url waarop jouw project staat. Géén slash aan het einde.
$base_url = 'http://localhost/B4-FOTOKIOSK';





//Hieronder niets aanpassen
//De rest van deze file is GEEN onderdeel van de toetsopdracht










$parent_file = "C:/xampp/htdocs/nakijken/parent.config.php";
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
