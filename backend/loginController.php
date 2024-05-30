<?php 
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

require_once 'conn.php';
$query = "SELECT * FROM users WHERE username = :username";
$statement = $conn->prepare($query);
$statement->execute([
    ":username" =>$username
]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

if($statement->rowCount() < 1 ){
    header('location: ../login.php?msg=Error: Gebruikersnaam niet gevonden.');
    die();
}

if(!password_verify($password, $user['password'])){
    header('location: ../login.php?msg=Error: Wachtwoord niet juist.');
    die();
}

$_SESSION['user_id'] = $user['id'];
$_SESSION['name'] = $user['name'];

header('location: ../admin/index.php?msg=U bent ingelogd');
?>