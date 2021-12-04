<?php
require_once './filters.php';
require_once './functions.php';
require_once './data_fetch.php';
// error_reporting(E_ERROR);
/**
 * Fetches data from the input tables and insert them into the database with various filterings and manipulations
 */

$db_sl_no = $result->num_rows;

$sl_no = ++$db_sl_no;

$date_input = string_filter($_POST['date'], 1);
$acname_input = stringManipulation(string_filter($_POST['acname'], 1), 2);
$bank = string_filter($_POST['bank'], 1);
$payment_method = string_filter($_POST['pay_method'], 1);
$trans_id_input = string_filter($_POST['trans_id'], 1);
$amount_input = string_filter($_POST['amount'], 1, 1);

if (!empty($date_input)) {
    $insertion_query = "INSERT INTO santosh_pattnaik VALUES ('$sl_no','$date_input','$acname_input','$bank','$payment_method','$trans_id_input','$amount_input')";
    if ($mysqli->query($insertion_query) === FALSE) {
        die("Data cannot be updated " . $mysqli->error);
    }
}

$mysqli->close();
header("Location: management.php");
exit;
