<?php

require_once 'db.php';

if (isset($_POST['editData'])) {
    $name = $_POST['name'];
    $relation = $_POST['relation'];

    $db = new DB();
    $db->editData($name, $relation);
    header('Location: index.php');
}
