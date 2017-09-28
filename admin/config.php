<?php
session_start();
require __DIR__ . '/../vendor/autoload.php';

spl_autoload_register(function ($classname) {
    include __DIR__ . "/../class/$classname.php";
});
const PATH = "/phonebook";
$loader = new Twig_Loader_Filesystem(__DIR__ . '/../templates');
$twig = new Twig_Environment($loader, array(
    'cache' => __DIR__ . '/../templates/cache',
    'debug' => true
        ));

class MyTwigExt extends Twig_Extension implements Twig_Extension_GlobalsInterface {

    public function getFilters() {
        return [
            new Twig_Filter("toman", function($r, $t = true) {
                        $a = number_format($r / 10, 0);
                        if ($t == true) {
                            $a .= "تومان";
                        }
                        return $a;
                    }),
            new Twig_Filter("persian_date", function($date) {
                        return FaCalUtils::printDateTime($date, "Y/M/d");
                    }
            )
        ];
    }

    public function getGlobals() {
        return ["path" => "/phonebook"];
    }

}

$twig->addExtension(new Twig_Extension_Debug);
$twig->addExtension(new MyTwigExt());

function redirect($url) {
    header("Location: $url");
    exit();
}

function isPost() {
    return ((filter_input(INPUT_SERVER, "REQUEST_METHOD")) == "POST");
}
