<?php

require_once './db_fetch.php';
/**
 * Fetches data from the databse and assigns them to their respective variables through a while loop echos and prints in the table
 */

while ($row = $result->fetch_assoc()) {
    /**
     * Variable to fetch date
     * 
     * @var string $date
     */
    $date = $row['Date'];
    $dt = $date[8] . $date[9];
    $month = $date[5] . $date[6];
    $year = $date[0] . $date[1] . $date[2] . $date[3];

    $monthName = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];

    $dateFiltered = $dt . ' - ' . $monthName[$month - 1] . ' - ' . $year;

    /**
     * Variable to fetch account holder name
     * 
     * @var string $acname
     */
    $acname = $row['Account_Holder_Name'];

    /**
     * Variable to fetch bank name
     * 
     * @var string $bankFetch
     */
    $bankFetch = $row['Bank_Name'];

    /**
     * Variable to fetch payment method
     * 
     * @var string $payMethodFetch
     */
    $payMethodFetch = $row['Payment_Method'];

    /**
     * Variable to fetch transaction ID
     * 
     * @var string $trans_id
     */
    $trans_id = $row['Transaction_ID'];

    /**
     * Variable to fetch amount of transaction
     * 
     * @var string $amount
     */
    $amount = $row['Amount'];

    /**
     * Variable to fetch the balance amount in the account
     * 
     * @var string $balance
     */
    $balance = $row['Balance'];

    echo
    "<tr>
        <td>
            $dateFiltered
        </td>            
        <td>
            $acname
        </td>
        <td>
            $bankFetch
        </td>
        <td>
            $payMethodFetch
        </td>
        <td>
            $trans_id
        </td>
        <td>
            Rs. $amount
        </td>
        <td>
            Rs. $balance
        </td>   
    </tr>";
}
