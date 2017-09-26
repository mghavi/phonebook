<?php

require __DIR__ . '/admin/config.php';

if (isPost()) {
    $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
    $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $cell_phone = filter_input(INPUT_POST, 'cell_phone', FILTER_SANITIZE_NUMBER_INT);
    $work_phone = filter_input(INPUT_POST, 'work_phone', FILTER_SANITIZE_NUMBER_INT);
    $home_phone = filter_input(INPUT_POST, 'home_phone', FILTER_SANITIZE_NUMBER_INT);
    $comment = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_STRING);
    $client = new Client();
    $client->setClient($firstname, $lastname, $email, $cell_phone, $work_phone, $home_phone, $comment);
    try {
        $client->addClient();
        redirect("index.php");
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
echo $twig->render('form.html.twig');
