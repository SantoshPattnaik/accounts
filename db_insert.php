<?php
error_reporting(E_ERROR | E_WARNING);

$db_sl_no = $result->num_rows;

$sl_no = ++$db_sl_no;

$date_input = $_POST['date'];
$acname_input = $_POST['acname'];
$bank = $_POST['bank'];
$payment_method = $_POST['pay_method'];
$trans_id_input = $_POST['trans_id'];
$amount_input = $_POST['amount'];
$balance_input = $_POST['balance'];

if (!empty($date_input)) {
    $insertion_query = "INSERT INTO santosh_pattnaik VALUES ('$sl_no','$date_input','$acname_input','$bank','$payment_method','$trans_id_input','$amount_input','$balance_input')";
    if ($mysqli->query($insertion_query) === TRUE) {
        echo "<script>alert('Database Updated')</script>";
    }
}

$mysqli->close();
