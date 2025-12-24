<?php
require_once '../Classes/Db_connection.php';
$db = new Database('localhost', 'root', 'oop_practice', '');
$conn = $db->connect();

if ($conn) {
    echo "Connected successfully";
} else {
    echo "Connection failed";
}