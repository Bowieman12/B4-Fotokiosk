<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("location: ../index.php?msg=Je hebt al een account. Je bent al ingelogd.");
    exit;
}

$username = $_POST['username'];
$password = $_POST['password'];
$password_check = $_POST['password_check'];

if ($password !== $password_check) {
    header("location: ../register.php?msg=Wachtwoorden komen niet overeen.");
    exit;
}

if (empty($password)) {
    header("location: ../register.php?msg=Wachtwoord mag niet leeg zijn.");
    exit;
}

require_once 'conn.php';

// Controleer of de gebruikersnaam al bestaat
$query = "SELECT * FROM users WHERE username = :username";
$statement = $conn->prepare($query);
$statement->execute([":username" => $username]);
if ($statement->rowCount() > 0) {
    header("location: ../register.php?msg=Deze gebruikersnaam is al in gebruik.");
    exit;
}

// Hash het wachtwoord
$hash = password_hash($password, PASSWORD_DEFAULT);

// Voeg de gebruiker toe aan de database
$query = "INSERT INTO users (username, password) VALUES (:username, :hash)";
$statement = $conn->prepare($query);
$statement->execute([
    ":username" => $username,
    ":hash"  => $hash
]);

header("Location: ../login.php?msg=Uw account is aangemaakt. Log in om het systeem te gebruiken.");
exit;
?>
