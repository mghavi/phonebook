<?php

require __DIR__ . '/../admin/config.php';

if (isPost()) {
    $item = filter_input(INPUT_POST, "item");
    $searchBy = filter_input(INPUT_POST, "search");
    $client = new Client();
    switch ($searchBy) {
        case "firstname":
            $result = $client->searchByFirstname($item);
            if ($result) {
                echo $twig->render("search.html.twig", array('result' => $result));
            } else {
                $msg[] = "مشتری با اطلاعات فوق پیدا نشد";
                echo $twig->render("search.html.twig", array('message' => $msg));
            }
            break;
        case "lastname":
            $result = $client->searchByLastname($item);
            if ($result) {
                echo $twig->render("search.html.twig", array('result' => $result));
            } else {
                $msg[] = "مشتری با اطلاعات فوق پیدا نشد";
                echo $twig->render("search.html.twig", array('message' => $msg));
            }
            break;
        case "email":
            $result = $client->searchByEmail($item);
            if ($result) {
                echo $twig->render("search.html.twig", array('result' => $result));
            } else {
                $msg[] = "مشتری با اطلاعات فوق پیدا نشد";
                echo $twig->render("search.html.twig", array('message' => $msg));
            }
            break;
        case "cellphone":
            $result = $client->searchByCellphone($item);
            if ($result) {
                echo $twig->render("search.html.twig", array('result' => $result));
            } else {
                $msg[] = "مشتری با اطلاعات فوق پیدا نشد";
                echo $twig->render("search.html.twig", array('message' => $msg));
            }
            break;
        case "workphone":
            $result = $client->searchByWorkphone($item);
            if ($result) {
                echo $twig->render("search.html.twig", array('result' => $result));
            } else {
                $msg[] = "مشتری با اطلاعات فوق پیدا نشد";
                echo $twig->render("search.html.twig", array('message' => $msg));
            }
            break;
        case "homephone":
            $result = $client->searchByHomephone($item);
            if ($result) {
                echo $twig->render("search.html.twig", array('result' => $result));
            } else {
                $msg[] = "مشتری با اطلاعات فوق پیدا نشد";
                echo $twig->render("search.html.twig", array('message' => $msg));
            }
            break;
        case "comment":
            $result = $client->searchByComment($item);
            if ($result) {
                echo $twig->render("search.html.twig", array('result' => $result));
            } else {
                $msg[] = "مشتری با اطلاعات فوق پیدا نشد";
                echo $twig->render("search.html.twig", array('message' => $msg));
            }
            break;
    }
} else {
    echo $twig->render("search.html.twig");
}


