<?php require_once './db_fetch.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounts</title>
</head>

<body>
    <?php
    if (!isset($_COOKIE['user_name'])) {
        ac_log("Cookie Does not exist so, create cookie value by providing input field to user");
    ?>
        <form action="/accounts/cookieCheck.php" method="post">
            <p>Your name is going to be used as the database name</p>
            <input type="text" placeholder="Enter your name here" name="name" value="">
            <input type="submit">
        </form>
    <?php } ?>
</body>

</html>