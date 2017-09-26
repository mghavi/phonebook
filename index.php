<?php

require __DIR__.'/admin/config.php';
$clinet = new Client();
echo $twig->render("search.html.twig");