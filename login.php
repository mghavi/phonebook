<?php

require_once './admin/config.php';
if (isPost()) {
    $email = filter_input(INPUT_POST, "email");
    $password = filter_input(INPUT_POST, "password");
    $remember = (int) filter_input(INPUT_POST, "remember", FILTER_SANITIZE_NUMBER_INT);
    $user = new User();
    $user->setEmail($email);
    $user->setPassword($password);
    $user->setCookie($remember);
//    var_dump($user);
//    die;
    if ($user->checklogin()) {
        if (isset($_SESSION['refer'])) {
            $url = explode("/", $_SESSION['refer']);
            $url = $url[count($url) - 1];
            unset($_SESSION['refer']);
            redirect($url);
        }
        redirect("index.php");
    } else {
        $msg[] = "ایمیل یا رمز عبور نادرست است";
        echo $twig->render("login.html.twig", array('message' => $msg));
    }
} else {

    echo $twig->render("login.html.twig");
}

