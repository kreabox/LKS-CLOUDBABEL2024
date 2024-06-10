<?php
include_once 'connection.php';
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = sha1($_POST['password']);
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    // echo $sql;
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $_SESSION['loggedin'] = true;
        $_SESSION['data'] = $result->fetch_all(MYSQLI_ASSOC);
        header("Location: /../app/index.php");
        exit;
    } else {
        echo "Username or Password is incorrect.";
        die;
    }
}
