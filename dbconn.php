<?php 
    define('DB_HOST','sql308.epizy.com');
    define('DB_USER','epiz_27856862');
    define('DB_PASS','mVjISflhDmbz');
    define('DB_NAME','epiz_27856862_employeeleavedb');
    
    try
    {
        $dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    }
        catch (PDOException $e)
    {
        echo "Looks like you don't have any database/connection for this project. Please check your Database Connection and Try Again! </br>";
        exit("Error: " . $e->getMessage());
    }
?>