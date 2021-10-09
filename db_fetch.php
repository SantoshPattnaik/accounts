<?php

/**
 * @package Accounts
 */
require_once __DIR__ . '/constants.php';
require_once DIR . '/db_manage.php';
// $query = "SELECT id FROM Accounts";
// $result = $conn->query($query);
// $number_of_rows = 0;
// while ($row = $result->fetch_assoc()) {
//     ++$number_of_rows;
// }

$query = "SELECT * FROM Accounts";
$result = $conn->query($query);
while ($row = $result->fetch_assoc()) {
    $id = $row['id'];
    $date = $row['Date'];
?>
<tr>
    <td><?php echo $date ?></td>
    <?php $acname = $row['Account_Name']; ?>
    <td><?php echo $acname ?></td>
    <?php $acnum = $row['Account_Number']; ?>
    <td><?php echo $acnum ?></td>
    <?php $ifsc = $row['IFSC']; ?>
    <td><?php echo $ifsc ?></td>
    <?php $debited = $row['Debited']; ?>
    <td><?php echo $debited ?></td>
    <?php $credited = $row['Credited']; ?>
    <td><?php echo $credited ?></td>
    <?php $balance = $row['Balance']; ?>
    <td><?php echo $balance ?></td>
</tr>
<?php }
$conn->close();
?>