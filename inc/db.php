<?php
// db connection
$user = 'root';
$pass = '';

try {
    $db = new PDO('mysql:host=localhost;port=3306;dbname=espace_membre', $user, $pass);
} catch (PDOException $e) {
    print "Erreur : " . $e->getMessage() . "<br/>";
    die;
}