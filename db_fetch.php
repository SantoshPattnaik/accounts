<?php

/**
 * @package Accounts
 */
require_once './constants.php';

$mysqli = new mysqli(HOST, UNAME, PASS);


$mysqli->query("CREATE DATABASE IF NOT EXISTS accounts");

$mysqli->query("USE accounts");

$mysqli->query('CREATE TABLE IF NOT EXISTS santosh_pattnaik(
    Sl_No INT NOT NULL,
    Date DATE NOT NULL,
    Acname VARCHAR(26) PRIMARY KEY,
    Trans_ID varchar(30) NOT NULL,
    Amount INT NOT NULL,
    Balance INT NOT NULL
)');

$result = $mysqli->query('SELECT * FROM santosh_pattnaik');
