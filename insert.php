<?php

require_once 'db.php';

if (isset($_POST['insertData'])) {
    $name = $_POST['name'];
    $relation = $_POST['relation'];

    $db = new DB();
    $db->insertData($name, $relation);
    header('Location: index.php');
}
