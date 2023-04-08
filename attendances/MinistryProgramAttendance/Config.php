<?php
    // Enable us to use Headers
    ob_start();
    // Set sessions
    if(!isset($_SESSION)) {
        //session_start();
    }

   define('DB_SERVER', 'us-cdbr-east-05.cleardb.net:3306');
   define('DB_USERNAME', 'bf5f0a2d8b3108');
   define('DB_PASSWORD', '4d7a7ab0');
   define('DB_DATABASE', 'heroku_cac12764d97fd49');

   $connection = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die("Database connection not established.");
   
?>