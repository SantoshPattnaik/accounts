<?php

/**
 * Connects and creates table and database using SQL Query
 * 
 * @package Accounts
 */
require_once './constants.php';

$mysqli = new mysqli(HOST, UNAME, PASS);


if (($mysqli->query("CREATE DATABASE IF NOT EXISTS accounts")) === false) {
    echo "Could not create database" . $mysqli->error;
}

$mysqli->query("USE accounts");

if (($mysqli->query('CREATE TABLE IF NOT EXISTS santosh_pattnaik(
    Sl_No INT PRIMARY KEY,
    Date DATE NOT NULL,
    Account_Holder_Name VARCHAR(26) NOT NULL,
    Bank_Name VARCHAR(26) NOT NULL,
    Payment_Method VARCHAR(12) NOT NULL,
    Transaction_ID varchar(30) NOT NULL,
    Amount INT NOT NULL,
    Balance INT NOT NULL
)')) === false) {
    echo "Could not create table in database " . $mysqli->error;
}

$result = $mysqli->query('SELECT * FROM santosh_pattnaik ORDER BY Sl_No DESC');
