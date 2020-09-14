<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_cat_dwm";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname, 3308);

/* Vérification de la connexion */
if ($mysqli->connect_errno) {
    printf("Échec de la connexion : %s\n", $mysqli->connect_error);
    exit();
}

?>