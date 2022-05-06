<?php
require_once './functions.php';
ob_start();
ac_log("Output Buffer 1 begins");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    ac_log("Server Request method: \"POST\"");
    if (!isset($_COOKIE['user_name'])) {
        $cookieVal = $_POST['name'];
        ob_end_flush();
        ac_log("Output Buffer 1 ends");
        setcookie('user_name', $cookieVal, time() + 3600);
        ac_log("Cookie set successful");

        header('Location: home.php');
        ac_log("Redirection to \"home.php\" after setting cookie");
    } else {
        header('Location: home.php');
        ac_log("Redirection to \"home.php\" as cookie already set");
    }
}
