<?php require_once './constants.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Accounts</title>
</head>

<body>
    <h1 id="site-title">ACCOUNTS MANAGEMENT</h1>

    <table aria-label="main-table">
        <tr>
            <th id="date">Date of<br>Transaction</th>
            <th id="account_name">Account<br>Holder Name</th>
            <th id="bank_name">Bank Name</th>
            <th id="payment_method">Payment Method</th>
            <th id="trans_id">Transaction<br>ID</th>
            <th id="amount">Amount</th>
            <th id="balance">Balance</th>
        </tr>
        <?php require_once DIR . '/data_fetch.php' ?>
    </table>
    <br>
    <br>
    <form name="mainForm" method="POST" action="./" onsubmit="return validate()">
        <table aria-label="input-table">
            <tr>
                <td>
                    <input type="date" name="date">
                </td>
                <td>
                    <input type="text" name="acname">
                </td>
                <td>
                    <input type="text" name="bank">
                </td>
                <td>
                    <input type="text" name="pay_method">
                </td>
                <td>
                    <input type="text" name="trans_id">
                </td>
                <td>
                    <input type="text" name="amount">
                </td>
                <td>
                    <input type="text" name="balance">
                </td>
            </tr>
        </table>
        <div id="button-container">
            <div id="center">
                <button id="submit-button" type="submit">Submit</button>
            </div>
        </div>
    </form>
    <?php require_once DIR . '/db_insert.php' ?>

    <a id="pageUpdate" href="./" target="_blank">See the changes</a>

    <script src="script.js"></script>
</body>

</html>