<?php

/**
 * Connects and creates table and database using SQL Query
 * 
 * @package Accounts
 */
require_once './constants.php';
require_once './functions.php';

$mysqli = new mysqli(HOST, UNAME, PASS);



if (($mysqli->query("CREATE DATABASE IF NOT EXISTS accounts")) === false) {
    echo "Could not create database" . $mysqli->error;
}

$mysqli->query("USE accounts");

if (isset($_COOKIE['user_name'])) {
    $db_name = stringHash(trim($_COOKIE['user_name']), 'md5');

    if (($mysqli->query("CREATE TABLE IF NOT EXISTS $db_name(
    Sl_No INT PRIMARY KEY,
    Date DATE NOT NULL,
    Account_Holder_Name VARCHAR(26) NOT NULL,
    Bank_Name VARCHAR(26) NOT NULL,
    Payment_Method VARCHAR(12) NOT NULL,
    Transaction_ID VARCHAR(30) NOT NULL,
    Amount INT NOT NULL
)")) === false) {
        echo "Could not create table in database " . $mysqli->error;
    }

    $result = $mysqli->query("SELECT * FROM $db_name ORDER BY Sl_No DESC");
}