<?php
// Connexion à la base de données (à adapter selon vos paramètres)
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bdd_user";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupérer le message depuis la requête POST
$message = $_POST['message'];


// Préparer et exécuter la requête SQL
$sql = "INSERT INTO threads (msg) VALUES ('msg')";
$response = array("status" => "success", "message" => array("msg" => $message));

// Fermer la connexion à la base de données
$conn->close();

// Renvoyer la réponse au format JSON
header('Content-Type: application/json');
echo json_encode($response);
?>

<!-- https://github.com/AriLeGrand/Forum_Wakfu/blob/main/chat/save_message.php -->