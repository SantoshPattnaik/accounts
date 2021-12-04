<?php
ob_start();
require_once './constants.php';
require_once './functions.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Accounts</title>
</head>

<body>
    <h1 id="site-title" class="display-3">ACCOUNTS MANAGEMENT</h1>
    <div class="table-responsive">
        <table aria-label="table" id="table" class="table table-striped table-bordered">
            <thead class="table-dark text-center">
                <tr>
                    <th id="date" scope="col">Date of Transaction</th>
                    <th id="account_name" scope="col">Account Holder Name</th>
                    <th id="bank_name" scope="col">Bank Name</th>
                    <th id="payment_method" scope="col">Payment Method</th>
                    <th id="trans_id" scope="col">Transaction ID</th>
                    <th id="amount" scope="col">Amount</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <div class="table-responsive">
                    <?php
                    ob_start();
                    require_once './data_fetch.php';
                    ob_end_flush(); ?>
                </div>
            </tbody>
        </table>
    </div>
    <br>
    <div class="text-center">
        <strong>After Submission please close the previous tab and refresh the tab opened after submission</strong>
    </div>

    <script src="script.js"></script>
    <!-- <script src="./bootstrap-5.1.3/js/jquery-3.6.0.js"></script> -->
    <script src="./bootstrap-5.1.3/js/bootstrap.min.js"></script>
</body>

</html>