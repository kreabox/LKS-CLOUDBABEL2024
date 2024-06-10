<?php include_once $_SERVER['DOCUMENT_ROOT'].'/services/connection.php'; ?>
<?php
$sql = "SELECT users.*, sekolah.nama as nama_sekolah FROM users LEFT JOIN sekolah ON users.sekolah_id = sekolah.id";
$result = $conn->query($sql);
?>
<div class="container mt-2">
    <div class="row align-items-center">
        <div class="col-md-10">
        <div class="alert alert-success px-2">
            Tabel Manajemen Data Pengguna
        </div>
        </div>
        <div class="col-md-2">
            <a class="btn btn-primary" href="tambah_user.php">Tambah Data</a>
        </div>
    </div>
</div>
<div class="container mt-3">
    <table class="table table-bordered table-stripped" width="100%">
        <thead>
            <tr align="center">
                <th>#No</th>
                <th>Username</th>
                <th>Nama Lengkap</th>
                <th>Nama Sekolah</th>
                <th>Role/Akses</th>
                <th>Pilihan</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($result) && $result->num_rows > 0) : ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td width="5%" align="center"><?= $row['id'] ?></td>
                        <td><?= $row['username'] ?></td>
                        <td><?= $row['nama'] == '' || $row['nama'] ==NULL ? '-' : $row['nama'] ?></td>
                        <td><?= $row['sekolah_id'] == 0 || $row['sekolah_id']==NULL ? '-' : $row['nama_sekolah'] ?></td>
                        <td align="center"><?= $row['role'] ?></td>
                        <td align="center">
                            <a href="edit_user.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                            <button type="button" onclick="hapus_user(<?= $row['id'] ?>)"  class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php $conn->close(); ?>
        </tbody>
    </table>
</div>