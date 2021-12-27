<?php
require_once './constants.php';
require_once './functions.php';

$mysql_obj = new mysqli(HOST, UNAME, PASS);
//Created or accessed database here 
if (($mysql_obj->query("CREATE DATABASE IF NOT EXISTS accounts")) === false) {
    echo "Could not create database" . $mysql_obj->error;
}

//Just a random table name for testing
$table_name = "randon";

$mysql_obj->query("USE accounts");
//Created table in database
if (($mysql_obj->query("CREATE TABLE IF NOT EXISTS $table_name(
    Sl_No INT PRIMARY KEY,
    Name VARCHAR(26) NOT NULL
)")) === false) {
    echo "Could not create table in database " . $mysql_obj->error;
}

//query to get all table names in the database
$result = $mysql_obj->query("SHOW TABLES");

$tables = array();
//loop counter
$i = 0;
while ($row = $result->fetch_assoc()) {
    $tables[$i] = $row['Tables_in_accounts'];
    $i++;
}
$input = "randon";
echo check_if_table_exists($input, $tables);

function check_if_table_exists($input, $tables)
{
    //this variable will contain the hashed content of the input string
    $hashed_input = stringHash($input, PRI_HASH_ALGO);

    //returnStatus initialized
    $returnStatus = 0;
    for ($i = 0; $i < count($tables); $i++) {
        //hash_equals is used to prevent timing attacks
        if (hash_equals($hashed_input, stringHash($tables[$i], PRI_HASH_ALGO))) {
            $returnStatus = 1;
        }
    }
    if ($returnStatus) {
        return 1;
    } else {
        return 0;
    }
}