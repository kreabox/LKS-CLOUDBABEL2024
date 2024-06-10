<?php 
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header("Location: /app/index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="d-flex justify-content-center align-items-center mb-3">
                    <a href="/" class="d-flex align-items-center mb-2 mb-md-0 text-dark text-decoration-none">
                        <img src="/../../assets/lks2024.png" alt="" class="img-fluid" width="128">
                    </a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="./services/login.php" method="POST">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>