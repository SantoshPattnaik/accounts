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

    <form name="mainForm" method="get" onsubmit="getValue()">
        <table aria-label="main-table">
            <tr>
                <th id="date">Date</th>
                <th id="account_name">Account</br> Name</th>
                <th id="trans_id">Transaction <br>ID</th>
                <th id="amount">Amount</th>
                <th id="balance">Balance</th>
            </tr>
            <?php require_once './data_fetch.php' ?>
            <tr>
                <td>
                    <?php echo $date ?>
                </td>
                <td>
                    <?php echo $acname ?>
                </td>
                <td>
                    <?php echo $trans_id ?>
                </td>
                <td>
                    <?php echo $amount ?>
                </td>
                <td>
                    <?php echo $balance ?>
                </td>
            </tr>

            <?php
            if ($sl_no == $db_sl_no) {
                for ($i = 0; $i < $sl_no; $i++) {
                    echo
                    "<tr>
                        <td>
                            $date
                        </td>
                        <td>
                            $acname
                        </td>
                        <td>
                            $trans_id
                        </td>
                        <td>
                            $amount
                        </td>
                        <td>
                            $balance
                        </td>   
                    </tr>";
                }
            }

            $db_sl_no++;
            ?>
        </table>
        </br>
        </br>
        <table aria-label="input-table">
            <tr>
                <td>
                    <input type="text">
                </td>
                <td>
                    <input type="text">
                </td>
                <td>
                    <input type="text">
                </td>
                <td>
                    <input type="text">
                </td>
                <td>
                    <input type="text">
                </td>
            </tr>
        </table>
        <div id="button-container">
            <div id="center">
                <button id="submit-button" type="submit">Submit</button>
            </div>
        </div>
    </form>
    <script src="script.js"></script>
</body>

</html>