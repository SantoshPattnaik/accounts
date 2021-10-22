<?php
require_once './filters.php';
error_reporting(E_ERROR);

$db_sl_no = $result->num_rows;

$sl_no = ++$db_sl_no;

$date_input = remove_special_chars($_POST['date']);
$acname_input = remove_special_chars($_POST['acname']);
$bank = remove_special_chars($_POST['bank']);
$payment_method = remove_special_chars($_POST['pay_method']);
$trans_id_input = remove_special_chars($_POST['trans_id']);
$amount_input = remove_special_chars($_POST['amount']);
$balance_input = remove_special_chars($_POST['balance']);

if (!empty($date_input)) {
    $insertion_query = "INSERT INTO santosh_pattnaik VALUES ('$sl_no','$date_input','$acname_input','$bank','$payment_method','$trans_id_input','$amount_input','$balance_input')";
    if ($mysqli->query($insertion_query) === TRUE) {
        echo "<script>alert('Database Updated')</script>";
    } else {
        echo "Data cannot be updated " . $mysqli->error;
    }
}

$mysqli->close();