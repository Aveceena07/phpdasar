<?php
$servername = 'localhost:3306';
$username_db = 'root';
$password_db = '';
$database_name = 'film_library';

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$conn = new mysqli($servername, $username_db, $password_db, $database_name);

if ($conn->connect_error) {
    die('Koneksi database gagal: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare(
        'INSERT INTO adminn(email, username, password) VALUES(?, ?, ?)'
    );
    $stmt->bind_param('sss', $email, $username, md5($password));
    $stmt->execute();
    echo 'Regristasi berhasil';
    header('location:login.php');
    $stmt->close();
    $conn->close();
}
?>
