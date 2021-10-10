<?php
error_reporting(E_ERROR | E_WARNING);

$db_sl_no = $result->num_rows;

$sl_no = ++$db_sl_no;

$date_input = $_POST['date'];
$acname_input = $_POST['acname'];
$trans_id_input = $_POST['trans_id'];
$amount_input = $_POST['amount'];
$balance_input = $_POST['balance'];

if ($date_input !== null) {
    $insertion_query = "INSERT INTO santosh_pattnaik(Sl_No,Date,Acname,Trans_ID,Amount,Balance) VALUES ('$sl_no','$date_input','$acname_input','$trans_id_input','$amount_input','$balance_input')";
    if ($mysqli->query($insertion_query) === TRUE) {
        echo "<script>alert('Database Updated')</script>";
    }
}

$mysqli->close();
