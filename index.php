<?php
function Autoloader($className)
{
    require "./classes/" . strtolower($className) . '.class.php';
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
    $dom = new DomHandler();
    $db = new DBManager('localhost', 'root', '');
    $db->arrange_table_values();
    $dom->create_div_tag(null, 'class', 'container-fluid p-2 bg-dark text-white text-center', $dom->create_b_tag('Accounts Management', 'class', 'display-4'), 1);
    $table_headings = array('#', 'Date', 'Name', 'Bank', 'Payment Method', 'Transaction_ID', 'Amount');
    $table_columns = array($db->get_sl_no(), $db->get_transDate(), $db->get_personName(), $db->get_bankName(), $db->get_payMethod(), $db->get_transID(), $db->get_transAmount());
    $dom->create_table1('class', 'table', 'class', 'table-dark text-center', $table_headings, 'class', 'text-center', $db->get_row_count(), $table_columns, 1);

    ?>
</body>

</html>