<?php
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";

$connect = mysqli_connect($hostName, $dbUser, $dbPassword);
if (!$connect) {
    die("connection failed");
}

$dbName = "edwin";

$dbCreateQuery = "CREATE DATABASE IF NOT EXISTS $dbName";
if (!mysqli_query($connect, $dbCreateQuery)) {
    die("failed to create database");
}


mysqli_select_db($connect, $dbName);

/* for revenue_tracker */

$sql_query = "CREATE TABLE IF NOT EXISTS revenue_tracker (
    id INT(10) AUTO_INCREMENT,
    revenue_amount INT(10) NOT NULL,
    revenue_description TEXT,
    revenue_date_and_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(id)
);";

if (!mysqli_query($connect, $sql_query)) {
    die("failed to create table");
}


/* for expense_tracker */
mysqli_select_db($connect, $dbName);

$sql_query2 = "CREATE TABLE IF NOT EXISTS expense_tracker (
    id INT(10) AUTO_INCREMENT,
    expense_amount INT(10) NOT NULL,
    expense_description TEXT,
    expense_date_and_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(id)
);";

if (!mysqli_query($connect, $sql_query2)) {
    die("failed to create table");
}



?>
