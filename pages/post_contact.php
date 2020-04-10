<?php
$errors = [];

if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors['email'] = "Vous n'avez pas renseigné d'e-mail valide";
}
if(!array_key_exists('object', $_POST) || $_POST['object'] == ''){
    $errors['object'] = "Vous n'avez pas renseigné d'objet";
}
if(!array_key_exists('message', $_POST) || $_POST['message'] == ''){
    $errors['message'] = "Vous n'avez pas renseigné de message";
}

session_start();

if(!empty($errors)){
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('Location: contact.php');
}else{
    $_SESSION['success'] = 1;
    $message_object = $_POST['object'];
    $message = $_POST['message'];
    $headers = $_POST['email'];
    mail('contact@ostyl.fr', 'Ostyl Contact: ' . $message_object, $message, 'De la part de : ' . $headers);
    header('Location: contact.php');
}