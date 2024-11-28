<?php

@include 'db_connect.php';

if (isset($_POST["submit"])){


    $expense_amount = $_POST["expense_amount"];
    $expense_description = $_POST["expense_description"];

$sql = "INSERT INTO expense_tracker (expense_amount, expense_description)
   VALUES ('$expense_amount', '$expense_description')";



$inject = mysqli_query($connect, $sql);



}

header("Location: index.php");















?>