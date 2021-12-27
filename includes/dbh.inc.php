<?php

$host = 'sql312.epizy.com';
$dbusername = 'epiz_30479689';
$password = '79v6g4XIdSSz';
$database = 'epiz_30479689_survey_vaksinasi';

$conn = mysqli_connect($host, $dbusername, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
