<?php 
if(!isset($_SESSION)) { 
    session_start(); 
} 
include_once $_SERVER['DOCUMENT_ROOT'].'/services/loadenv.php';

$db_host = $_ENV['MYSQL_HOST'];
$db_user = $_ENV['MYSQL_USER'];
$db_pass = $_ENV['MYSQL_PASSWORD'];
$db_name = $_ENV['MYSQL_DATABASE'];

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
