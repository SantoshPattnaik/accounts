<?php

/**
 * @package Accounts
 */

/**
 * @var mixed variable to initialize mysqli object
 * 
 * @param constant HOST database hostname
 * @param constant UNAME database username
 * @param constant PASS database password
 */
require_once __DIR__ . '/constants.php';
$conn = new mysqli(HOST, UNAME, PASS);
// Check connection
if ($conn->connect_error) {
    print("Connection failed: " . $conn->connect_error);
} else {
    /**
     * @var string SQL query to be exeuted
     */
    $query = "SHOW DATABASES";
    /**
     * @var object result is returned to this as array of columns
     */
    $result = $conn->query($query);

    /**
     * @var bool store value from 0 to 1 to indicate data exists in database or not 
     */
    $db_exists = 0;
    while ($row = $result->fetch_assoc()) {
        if ($row["Database"] == "accounts") {
            $db_exists = 1;
            break;
        }
    }
}


if (!$db_exists) {
    die("Database does not exist");
}
$query = "USE accounts";
if (!($conn->query($query)) === TRUE) {
    print($conn->error);
}

$query = "CREATE TABLE Accounts(
    id INT(10) PRIMARY KEY,
    Date DATE NOT NULL, 
    Account_Name VARCHAR(40) NOT NULL,
    Account_Number VARCHAR(40) NOT NULL,
    IFSC VARCHAR(12) NOT NULL,
    Debited DECIMAL(12,2),
    Credited DECIMAL(12,2),
    Balance DECIMAL(12,2)
)";

$query = "SELECT * FROM Accounts";
if (!($conn->query($query)) === TRUE) {
    print($conn->error);
}

// Create database
// $query = "CREATE DATABASE accounts";
// if ($conn->query($query) === TRUE) {
//     echo "Database created successfully";
// } else {
// if (!substr_compare($conn->error, "database exists", 34)) {
// }

require_once __DIR__ . '/ajax1.php';
require_once __DIR__ . '/ajax2.php';
require_once __DIR__ . '/ajax3.php';
require_once __DIR__ . '/ajax4.php';
require_once __DIR__ . '/ajax5.php';
require_once __DIR__ . '/ajax6.php';

if ($q1 !== null) {
    if ($q2 !== null) {
        if ($q3 !== null) {
            if ($q4 !== null) {
                if ($q5 !== null) {
                    if ($q6 !== null) {
                        $query = "INSERT INTO Accounts VALUES(22,'$q1','$q2','$q3','$q4','$q6','$q5',6)";
                        if (!($conn->query($query)) === TRUE) {
                            print("<b>This error is generated: </b>" . $conn->error);
                        }
                    }
                }
            }
        }
    }
}