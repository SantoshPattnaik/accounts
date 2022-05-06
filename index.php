<?php
function Autoloader($className)
{
    require strtolower($className) . '.class.php';
}
spl_autoload_register('Autoloader');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5.1.3/css/bootstrap.min.css">
    <script>
    var xhr = false;

    if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }

    function getData(dataSource, divID) {
        if (xhr) {
            var obj = document.getElementById(divID);
            xhr.open("GET", dataSource);

            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    obj.innerHTML = xhr.responseText;
                }
            }
            xhr.send(null);
        }
    }
    </script>
    <title>Training</title>
</head>

<body>
    <?php
    $db = new DBManager('localhost', 'root', '');
    $db->arrange_table_values();
    $dom = new DOMDocument();
    $table = $dom->createElement('table');
    $thead = $dom->createElement('thead');
    $tbody = $dom->createElement('tbody');
    $table->setAttribute('class', 'table');
    $thead->setAttribute('class', 'table-dark text-center');
    $tbody->setAttribute('class', 'text-center');
    $tr = array();
    $index = 0;
    do {
        array_push($tr, $dom->createElement('tr'));
        $index++;
    } while ($index < $db->get_row_count());
    array_push($tr, $dom->createElement('tr'));
    array_push($tr, $dom->createElement('tr'));

    $th = array();
    array_push($th, $dom->createElement('th', '#'));
    array_push($th, $dom->createElement('th', 'Date Of Transaction'));
    array_push($th, $dom->createElement('th', 'Account Holder Name'));
    array_push($th, $dom->createElement('th', 'Bank Name'));
    array_push($th, $dom->createElement('th', 'Payment Method'));
    array_push($th, $dom->createElement('th', 'Transaction ID'));
    array_push($th, $dom->createElement('th', 'Amount'));
    for ($i = 0; $i < count($th); $i++) {
        $tr[0]->appendChild($th[$i]);
    }
    $thead->appendChild($tr[0]);
    $table->appendChild($thead);
    $td = array();
    $index = 0;
    while ($index < $db->get_row_count()) {
        array_push($td, $dom->createElement('td', $db->get_sl_no($index)));
        array_push($td, $dom->createElement('td', $db->get_transDate($index)));
        array_push($td, $dom->createElement('td', $db->get_personName($index)));
        array_push($td, $dom->createElement('td', $db->get_bankName($index)));
        array_push($td, $dom->createElement('td', $db->get_payMethod($index)));
        array_push($td, $dom->createElement('td', $db->get_transID($index)));
        array_push($td, $dom->createElement('td', $db->get_transAmount($index)));
        $index++;
    }
    $last_row = end($tr);
    $index = 0;
    $j = 0;
    for ($i = 1; $i <= $db->get_row_count(); $i++) {
        for (; $j < (count($th) * $i); $j++) {
            $tr[$i]->appendChild($td[$j]);
        }
    }
    // while ($index < count($td)) {
    //     $tr[1]->appendChild($td[$index]);
    //     $index++;
    // }
    $last_column = array();
    array_push($last_column, $dom->createElement('td'));
    array_push($last_column, $dom->createElement('td'));
    array_push($last_column, $dom->createElement('td'));
    array_push($last_column, $dom->createElement('td'));
    array_push($last_column, $dom->createElement('td'));
    array_push($last_column, $dom->createElement('td', 'Balance'));
    array_push($last_column, $dom->createElement('td', $db->get_balance()));

    $index = 0;
    while ($index < count($last_column)) {
        $last_row->appendChild($last_column[$index]);
        $index++;
    }
    for ($i = count($tr) - 2; $i > 0; $i--) {
        $tbody->appendChild($tr[$i]);
    }
    $tbody->appendChild($last_row);
    $table->appendChild($tbody);
    echo $dom->saveHTML($table);

    ?>
</body>

</html>