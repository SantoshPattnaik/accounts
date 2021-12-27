<?php
ob_start();
require_once './constants.php';
require_once './functions.php';
ac_log("Output Buffer 2 begins"); ?>
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
                    require_once './data_fetch.php'; ?>
                </div>
            </tbody>
        </table>
        <div class="input-group mb-3 input-group-lg">
            <span class="input-group-text">Balance</span>
            <input type="text" class="form-control" placeholder="Rs <?php echo $balance ?>" disabled>
        </div>
    </div>
    <br>
    <script src="script.js"></script>
    <!-- <script src="./bootstrap-5.1.3/js/jquery-3.6.0.js"></script> -->
    <script src="./bootstrap-5.1.3/js/bootstrap.min.js"></script>
    <?php ac_log("------\"management.php\" renders completely------"); ?>
</body>

</html>