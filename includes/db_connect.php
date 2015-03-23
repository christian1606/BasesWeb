<?php

$server = "localhost";
$dbname = "blogv1";
$user = "root";
$pwd = "";

// PDO
$dsn = "mysql:dbname=".$dbname.";host=".$server.";charset=utf8";

$db = new PDO($dsn, $user, $pwd);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
// détruire les autres variables
unset($server, $dbname, $user, $pwd, $dsn);