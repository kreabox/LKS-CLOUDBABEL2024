<?php include_once $_SERVER['DOCUMENT_ROOT'].'/services/connection.php'; ?>
<?php
$sql = "SELECT * FROM sekolah";
$result = $conn->query($sql);
?>
<div class="container mt-5">
    <div class="row align-items-center ">
        <div class="col-md-10">
        <div class="alert alert-success px-2">
            Tabel Manajemen Data Sekolah
        </div>
        </div>
        <div class="col-md-2">
            <a class="btn btn-primary" href="form_tambah_sekolah.php">Tambah Data</a>
        </div>
    </div>
</div>

<div class="container mt-3"></div>