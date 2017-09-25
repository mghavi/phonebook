<?php

require __DIR__.'/admin/config.php';
$clinet = new Client();
//$clinet->setClient("mehdi", "ghavi", "moeicnn.ghavi@gmail.com", "0009176184340", $work_phone, $home_phone, $comment);
//$clinet->addClient();

var_dump($clinet->searchByLastname("g"));