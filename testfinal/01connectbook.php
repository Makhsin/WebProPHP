<?php

$localhost = "localhost";
$user = "root";
$pass = "";
$db = "itbook";

$conn = mysqli_connect($localhost,$user,$pass,$db) or ("SQL ไม่สามารถใช้งานได้");
mysqli_set_charset($conn, "UTF8");
