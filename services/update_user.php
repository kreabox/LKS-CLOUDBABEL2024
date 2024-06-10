<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/services/connection.php';
if(isset($_GET['id'])){
    if($_GET['id']!= NULL){
        $id = $_GET['id'];
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $role = $_POST['role'];
        $sql = "UPDATE users SET nama = '$nama', username = '$username', role = '$role' WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            header('Location: /app/daftar_user.php'); 
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
}
?>