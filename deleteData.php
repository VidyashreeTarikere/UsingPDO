<?php

require_once 'db.php';

if (isset($_POST['deleteData'])) {
    $name = $_POST['name'];

    $db = new DB();
    $db->deleteData($name);
    header('Location: index.php');
}
