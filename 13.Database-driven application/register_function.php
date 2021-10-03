<?php
include 'db/db_connection.php';
$response='';

if (isset($_POST['username'], $_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    include_once 'db/user_queries.php';

    $result = register($connection, $username, $password);

    if ($result) {
        header("Location: login.php");
    } else {
        $response = "error";
    }

}
include_once 'templates/register_form.php';
