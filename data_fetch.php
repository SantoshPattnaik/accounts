<?php

require_once DIR . '/db_fetch.php';


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

    $dateFiltered = $dt . '/' . $month . '/' . $year;

    /**
     * Variable to fetch account holder name
     * 
     * @var string $acname
     */
    $acname = $row['Acname'];

    /**
     * Variable to fetch transaction ID
     * 
     * @var string $trans_id
     */
    $trans_id = $row['Trans_ID'];

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
