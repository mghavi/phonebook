<?php

require __DIR__ . '/../admin/config.php';

$clientId = filter_input(INPUT_GET, 'id');
$client = new Client();
$result = $client->getClient($clientId);
if ($result){
    echo $twig->render("form.html.twig",array("user"=>$result));
}else{
    $msg[]="مشتری با این مشخصات وجود ندارد";
}
if (isPost()){
    
}