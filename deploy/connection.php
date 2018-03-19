<?php
    define('DB_HOST', 'web599.webfaction.com');
    define('DB_NAME', 'mattr');
    define('DB_USER','averythomas');
    define('DB_PASSWORD','testpass');
    $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());
    $db = mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL DB: " . mysqli_error());
    if (mysqli_connect_errno($con)) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    } else {
        #echo 'Successfully connected to your databaseÉ';
    }
?>