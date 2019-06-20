<?php
$connection = mysqli_connect('webservhost', 'neverend_admin1', 'admin1pass','neverend_database');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'neverend_database');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}