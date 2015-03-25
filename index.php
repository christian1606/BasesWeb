<?php
/* init avec session_start() */
require("includes/all.php");

$app =  Application::getInstance()->setDb($db);

//  traite requete
$app->handleRequest();

// déclenche affichage
$app->renderResponse();