<?php

$serverName = "sql312.epizy.com";
$dbUsername = "epiz_30479689";
$dbPassword = "79v6g4XIdSSz";
$dbName = "epiz_30479689_survey_vaksinasi";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
