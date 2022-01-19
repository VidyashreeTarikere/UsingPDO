<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once('db.php');

$db = new DB();

//$data = $db->getData();

//Search searchData
if (isset($_GET['search'])) {
    $data = $db->searchData($_GET['search']);
} else {
    $data = $db->getData();
}

require_once 'overview.php';
