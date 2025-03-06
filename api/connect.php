<?php
require_once 'config.php';

$dbh = "sqlite:$db";

try {
    $pdo = new PDO($dbh);
    echo "database connected";
} catch(Exception $e){
    echo $e->getMessage();
}