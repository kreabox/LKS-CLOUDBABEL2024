<?php include_once $_SERVER['DOCUMENT_ROOT'].'/services/connection.php'; ?>
<?php
$sql = "SELECT users.*, sekolah.nama as nama_sekolah FROM users LEFT JOIN sekolah ON users.sekolah_id = sekolah.id";
$result = $conn->query($sql);
?>
<div class="container mt-5">
    <div class="alert alert-success px-2">
        Tabel Manajemen Data Pengguna
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
                        <td>
                            <a href="" class="btn btn-sm btn-primary">Edit</a>
                            <a href="../services/hapus_user.php?id=<?= $row['id'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"  class="btn btn-sm btn-primary">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php $conn->close(); ?>
        </tbody>
    </table>
</div>