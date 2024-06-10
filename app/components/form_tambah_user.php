<div class="container mt-2">
    <div class="alert alert-success text-center">
        Tambah Data User
    </div>
    <!--  -->
    <form action="/services/save_user.php" method="POST">
    <div class="card">
        <div class="card-body">
            <div class="form-group mb-2">
                <label for="">Nama Pengguna</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap">
            </div>
            <div class="form-group mb-2">
                <label for="">Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
            </div>
            <div class="form-group mb-2">
                <label for="">Password</label>
                <input type="text" class="form-control" name="password" id="password" placeholder="Password">
            </div>
            <div class="form-group mb-2">
                <label for="">Role Akses</label>
                <select name="role" id="role" class="form-control">
                    <option value="">-- Pilih Jenis Akses --</option>
                    <option value="ADMIN" >ADMINISTRATOR</option>
                    <option value="STAFT TU" >STAFT TU</option>
                    <option value="GURU" >GURU</option>
                </select>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-end">
            <button class="btn btn-primary" type="submit">SIMPAN PENGGUNA</button>
        </div>
    </div>
    </form>
</div>