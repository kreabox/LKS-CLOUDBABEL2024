    <div class="container mt-5">
        <div class="d-flex justify-content-center align-items-center">
            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img src="/../../assets/lks2024.png" alt="" class="img-fluid">
            </a>
        </div>

        <div class="alert alert-success px-2">
            Selamat Datang <?= strtoupper($_SESSION['data'][0]['nama'])  ?> Anda Sedang Login Sebagai <?= $_SESSION['data'][0]['role'] ?>.
        </div>
    </div>