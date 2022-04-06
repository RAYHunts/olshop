<?php
require 'config.php';
$conn = mysqli_connect($host,$username,$pass, $database);

function query( $query) {
    global $conn;
    $result = mysqli_query( $conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc( $result)){
        $rows[] = $row;
    }
    return $rows;
}