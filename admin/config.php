<?php

require __DIR__ . '/../vendor/autoload.php';

spl_autoload_register(function ($classname) {
    include __DIR__ . "/../class/$classname.php";
});
$dbname = 'phonebook';
$dbuser = 'root';
$dbpass = '';
$db = new PDO("mysql:dbname=$dbname;charset=utf8", $dbuser, $dbpass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$loader = new Twig_Loader_Filesystem(__DIR__ . '/../templates');
$twig = new Twig_Environment($loader, array(
    'cache' => __DIR__ . '/../templates/cache',
        ));
function isPost(){
    return ((filter_input(INPUT_SERVER, "REQUEST_METHOD"))== "POST");
}


