<?php

require_once DIR . '/db_fetch.php';

/**
 * Variable to fetch date
 * 
 * @var string $date
 */

while ($row = $result->fetch_assoc()) {
    $date = $row['Date'];
    $acname = $row['Acname'];
    $trans_id = $row['Trans_ID'];
    $amount = $row['Amount'];
    $balance = $row['Balance'];
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

/**
 * Variable to fetch account holder name
 * 
 * @var string $acname
 */
// $acname = 'Santosh Pattnaik';

/**
 * Variable to fetch transaction ID
 * 
 * @var string $trans_id
 */
// $trans_id = 'abcd';

/**
 * Variable to fetch amount of transaction
 * 
 * @var string $amount
 */
// $amount = '10,000';

/**
 * Variable to fetch the balance amount in the account
 * 
 * @var string $balance
 */
// $balance = '1,00,000';