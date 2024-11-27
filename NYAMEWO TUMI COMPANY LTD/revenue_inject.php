<?php

@include 'db_connect.php';

if (isset($_POST["submit"])){


    $revenue_amount = $_POST["revenue_amount"];
    $revenue_description = $_POST["revenue_description"];

$sql = "INSERT INTO revenue_tracker (revenue_amount, revenue_description)
   VALUES ('$revenue_amount', '$revenue_description')";



$inject = mysqli_query($connect, $sql);



}

header("Location: index.php");


?>