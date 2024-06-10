<?php 
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: /../index.php");
    exit;
}
?>
<!-- HTML COMPONENTS -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LKS Provinsi Bangka Belitung - Cloud Computing 2024</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="index.php" class="nav-link px-2 link-secondary">Beranda</a></li>
            <li><a href="daftar_sekolah.php" class="nav-link px-2 link-dark">Daftar Sekolah</a></li>
            <li><a href="daftar_guru.php" class="nav-link px-2 link-dark">Daftar Guru & Staft</a></li>
            <?php if($_SESSION['data'][0]['role']==='ADMIN'): ?>
            <li><a href="daftar_user.php" class="nav-link px-2 link-dark">Daftar Pengguna</a></li>
            <?php endif; ?>
        </ul>
        <div class="d-flex flex-wrap align-items-center justify-content-center" style="gap:10px;">
            <b>
                Halo <?php echo $_SESSION['data'][0]['nama']; ?> !
            </b>
            <a href='logout.php' class="btn btn-danger ms-4">Logout</a>
        </div>
    </header>
</div>
