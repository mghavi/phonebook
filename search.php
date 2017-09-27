<?php

require __DIR__ . '/admin/config.php';

if (isPost()) {
    $item = filter_input(INPUT_POST, "item");
    $searchBy = filter_input(INPUT_POST, "search");
    $client = new Client();
    $r = $client->searchByFirstname($item);
    //var_dump($r);
    echo $twig->render("search.html.twig", array('result'=>$r));
    die;
//    switch ($searchBy) {
//        case "firstname":
//            $result = $client->searchByFirstname($item);
//            if ($result) {
//                echo $twig->render("search.html.twig", $result);
//            } else {
//                $msg[] = "مشتری با اطلاعات فوق پیدا نشد";
//            }
//            break;
//        case "lastname":
//            $result = $client->searchByLastname($item);
//            if ($result) {
//                echo $twig->render("search.html.twig", $result);
//            } else {
//                $msg[] = "مشتری با اطلاعات فوق پیدا نشد";
//            }
//            break;
//        case "email":
//            $result = $client->searchByEmail($item);
//            if ($result) {
//                echo $twig->render("search.html.twig", $result);
//            } else {
//                $msg[] = "مشتری با اطلاعات فوق پیدا نشد";
//            }
//            break;
//        case "cellphone":
//            $result = $client->searchByCellphone($item);
//            if ($result) {
//                echo $twig->render("search.html.twig", $result);
//            } else {
//                $msg[] = "مشتری با اطلاعات فوق پیدا نشد";
//            }
//            break;
//        case "workphone":
//            $result = $client->searchByWorkphone($item);
//            if ($result) {
//                echo $twig->render("search.html.twig", $result);
//            } else {
//                $msg[] = "مشتری با اطلاعات فوق پیدا نشد";
//            }
//            break;
//        case "homephone":
//            $result = $client->searchByHomephone($item);
//            if ($result) {
//                echo $twig->render("search.html.twig", $result);
//            } else {
//                $msg[] = "مشتری با اطلاعات فوق پیدا نشد";
//            }
//            break;
//        case "comment":
//            $result = $client->searchByComment($item);
//            if ($result) {
//                echo $twig->render("search.html.twig", $result);
//            } else {
//                $msg[] = "مشتری با اطلاعات فوق پیدا نشد";
//            }
//            break;
//    }
//
//            } else {
//    echo $twig->render("search.html.twig");
//}
}
echo $twig->render("search.html.twig");

