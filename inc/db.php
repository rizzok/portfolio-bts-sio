<?php
// db connection
$user = 'root';
$pass = '';

try {
    $db = new PDO('mysql:host=localhost;dbname=ostylfrtfjphport;port=3308', $user, $pass);
} catch (PDOException $e) {
    print "Erreur : " . $e->getMessage() . "<br/>";
    die;
}