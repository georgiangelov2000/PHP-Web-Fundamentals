<?php
require_once 'db/db_connection.php';

if (isset($_POST['username'], $_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    require_once 'db/user_queries.php';

    $result = register($connection, $username, $password);

    if ($result) {
         header("Location: login_form.php");
    } else {
        echo 'error';
    }

}
require_once 'templates/register_form.php';
