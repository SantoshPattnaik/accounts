<?php
ob_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_COOKIE['user_name'])) {
        $cookieVal = $_POST['name'];
        ob_end_flush();
        setcookie('user_name', $cookieVal, time() + 3600);

        header('Location: home.php');
    } else {
        header('Location: home.php');
    }
}