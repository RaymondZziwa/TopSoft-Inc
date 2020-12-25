<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "TopSoft Inc";

$conn =new sqlite3('TopSoft Inc.db');

if(!$conn){
    die('connection failed : '.sqlite3_connect_error());
}