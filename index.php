<?php

require __DIR__.'/admin/config.php';
$clinet = new Client();
$clinet->setClient("moein", "ghavi", "moein.ghavi@gmail.com", "09176184340", $work_phone, $home_phone, $comment);
$clinet->addClient();