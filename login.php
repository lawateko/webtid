<?php

require_once "config/koneksi.php";

if (isset($_POST["login"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $stmt = $con->prepare("SELECT * FROM user WHERE email = :email");
    $stmt->execute(['email' => $email]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (password_verify($password, $user["password"])) {

        header("Location: index.php");
        exit;
    } else {
        echo "<script>
            alert('Email/password salah, coba lagi!');
            window.location.href = 'login.php';
          </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Login</title>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-md-4 mx-auto ">
            <div class="card">
                <div class="card-header fs-5 fw-bold text-center">LOGIN</div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label class="form-label fw-semibold" for="">Email</label>
                            <input name="email" class="form-control" type="email" placeholder="emailkamu@gmail.com/@yahoo.com" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold" for="">Password</label>
                            <input name="password" class="form-control" type="password" required>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary w-100 fw-semibold" type="submit" name="login">LOG IN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>