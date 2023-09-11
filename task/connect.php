<?php
$servername = 'localhost:3306';
$username_db = 'root';
$password_db = '';
$database_name = 'film_library';

$conn = new mysqli($servername, $username_db, $password_db, $database_name);

if ($conn->connect_error) {
    die('Koneksi database gagal: ' . $conn->connect_error);
}
?>
