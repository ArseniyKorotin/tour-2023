<?php

$v = "US";
if (isset($_POST['formSubmit'])) {
    $v = $_POST['formCountry'];
    $stars = $_POST['stars'];
    $price = $_POST['price'];
    $redir = "US.php";
    $country = $_POST['formCountry'];
    // switch ($v) {
    //     case "US":
    //         $redir = "US.php";
    //         $country = "US";
    //         break;
    //     case "UK":
    //         $redir = "UK.php";
    //         $country = "UK";
    //         break;
    //     case "France":
    //         $redir = "France.php";
    //         $country = "France";
    //         break;
    //     case "Mexico":$redir = "Mexico.php";
    //         break;
    //     case "Japan":$redir = "Japan.php";
    //         break;
    //     default:echo ("Error!");exit();
    //         break;
    // }
    $redir = "country.php";
    header("Location: $redir?country=$country&stars=$stars");
    exit();
}