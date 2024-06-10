<?php include_once $_SERVER['DOCUMENT_ROOT'].'/services/connection.php'; ?>
<div class="container mt-2">
<?php if(isset($_GET['id'])): ?>
    <?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($sql);        
    ?>
    <?php if ($result->num_rows == 1) :?>
    <?php $data = $result->fetch_all(MYSQLI_ASSOC)[0];?>
    <?php $conn->close(); ?>
    <div class="alert alert-info text-center">
        Update Data User
    </div>
    <!--  -->
    <form action="/services/update_user.php?id=<?= $_GET['id'] ?>" method="POST">
    <div class="card">
        <div class="card-body">
            <div class="form-group mb-2">
                <label for="">Nama Pengguna</label>
                <input type="text" class="form-control" name="nama" id="nama" value="<?= $data['nama'] ?>">
            </div>
            <div class="form-group mb-2">
                <label for="">Username</label>
                <input type="text" class="form-control" name="username" id="username" value="<?= $data['username'] ?>">
            </div>
            <div class="form-group mb-2">
                <label for="">Role Akses</label>
                <select name="role" id="role" class="form-control">
                    <option value="">-- Pilih Jenis Akses --</option>
                    <option value="ADMIN" <?= $data['role']=='ADMIN' ? 'selected' : '' ?>>ADMINISTRATOR</option>
                    <option value="STAFT TU" <?= $data['role']=='STAFT TU' ? 'selected' : '' ?>>STAFT TU</option>
                    <option value="GURU" <?= $data['role']=='GURU' ? 'selected' : '' ?>>GURU</option>
                </select>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-end">
            <button class="btn btn-primary" type="submit">SIMPAN PERUBAHAN</button>
        </div>
    </div>
    </form>
    <!--  -->
    <?php else: ?>
        <div class="alert alert-danger">
            <h3 class="text-center">Data Tidak Ditemukan Database !!!</h3>
        </div>
    <?php endif; ?>
<?php else: ?>
    <div class="alert alert-danger">
        <h3 class="text-center">Parameter Data Tidak Ditemukan !!!</h3>
    </div>
<?php endif; ?>
</div>