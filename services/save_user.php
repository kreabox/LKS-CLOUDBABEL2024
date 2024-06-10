<?php include_once $_SERVER['DOCUMENT_ROOT'].'/services/connection.php'; ?>
<?php 
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])){
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $role = $_POST['role'];
    $password = sha1($_POST['password']);
    $sql = "INSERT INTO users (nama, username, role, password) VALUES('$nama','$username','$role', '$password')";
    if ($conn->query($sql) === TRUE) {
        header('Location: /app/daftar_user.php'); 
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();    
}else{
    echo "Terjadi Kesalahan Saat Menambah Data";
}
?>