<?php require_once './constants.php' ?>
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
                    <th id="balance" scope="col">Balance</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php require_once DIR . '/data_fetch.php' ?>
                <form class="form-group" name="mainForm" method="POST" onsubmit="return validate()">
                    <div class="table-responsive">
                        <tr>
                            <td>
                                <input class="form-control" type="date" name="date">
                            </td>
                            <td>
                                <input class="form-control" type="text" name="acname">
                            </td>
                            <td>
                                <select class="form-control" type="text" name="bank">
                                    <option>State Bank Of India</option>
                                    <option>Union Bank Of India</option>
                                    <option>Canara Bank</option>
                                    <option>Federal Bank Of India</option>
                                    <option>Punjab National Bank</option>
                                    <option>Yes Bank</option>
                                    <option>Axis Bank</option>
                                    <option>HDFC Bank</option>
                                    <option>ICICI Bank</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control" type="text" name="pay_method">
                                    <option>UPI</option>
                                    <option>Transfer</option>
                                    <option>Cheque</option>
                                    <option>Credit Card</option>
                                    <option>Debit Card</option>
                                    <option>Netbanking</option>
                                    <option>RTGS</option>
                                </select>
                            </td>
                            <td>
                                <input class="form-control" type="text" name="trans_id">
                            </td>
                            <td>
                                <input class="form-control" type="text" name="amount">
                            </td>
                            <td>
                                <input class="form-control" type="number" name="balance">
                            </td>
                        </tr>
                    </div>
            </tbody>
        </table>
    </div>
    </table>
    <div id="button-container">
        <div id="center" class="text-center">
            <button id="submit-button" class="btn btn-outline-success" formaction="./" type="submit">Submit</button>
        </div>
    </div>
    </form>
    <br>
    <div style="text-align:center">
        <strong>After Submission please close the prevoius tab and refresh he tab opened after submission</strong>
    </div>
    <?php require_once DIR . '/db_insert.php' ?>

    <script src="script.js"></script>
    <!-- <script src="./bootstrap-5.1.3/js/jquery-3.6.0.js"></script> -->
    <script src="./bootstrap-5.1.3/js/bootstrap.min.js"></script>
</body>

</html>