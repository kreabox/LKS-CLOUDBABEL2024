    <div class="container mt-2">
        <div class="row">
            <div class="col-md-4">
                <div class="d-flex justify-content-center align-items-center">
                    <a href="/" class="d-flex align-items-center mb-2 mb-md-0 text-dark text-decoration-none">
                        <img src="/../../assets/lks2024.png" alt="" class="img-fluid" height="120">
                    </a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="alert alert-success px-2">
                    <h3>Selamat Datang <?= strtoupper($_SESSION['data'][0]['nama'])  ?></h3>
                    <p> Anda Sedang Login Sebagai <?= $_SESSION['data'][0]['role'] ?>.</p>
                </div>
                <p>
                Dalam era digital saat ini, efisiensi dan kecepatan dalam pengelolaan data di lembaga pendidikan sangatlah vital. Dinas Pendidikan Provinsi Bangka Belitung mempersembahkan sebuah solusi terintegrasi yang mengubah cara kita mengelola data guru dan sekolah. Melalui aplikasi ini, kami menyediakan alat yang canggih dan mudah digunakan untuk membantu meningkatkan kualitas layanan pendidikan di wilayah ini.
                </p>
            </div>
        </div>
    </div>