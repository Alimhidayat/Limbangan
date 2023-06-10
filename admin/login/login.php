<?php
session_start();

if (isset($_SESSION["login"])) {
    header("Location:../index.php");
    exit;
}

require '../function/functions.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");
     // Cek username
     if (mysqli_num_rows($result) == 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if ($password == $row['password']) {
            // set session
            $_SESSION['login'] = true;
            
            echo "<script>
                alert('Login berhasil');
                document.location.href='../index.php';
            </script>";
            header('Location: ../index.php');
            exit;
        } else{
            echo "<script>
            alert('password salah');
        </script>";
        }
    } else{
        echo "<script>
            alert('username salah');
        </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            border: 1px solid #ced4da;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 5px;
            width: 300px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-container">
            <h3 class="text-center mb-4">Halaman Login Limbangan</h3>
            <form action="" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="username" id="username" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        </div>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" name="login" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap 4 JS (optional, if you need to add interactivity) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- Font Awesome JS (optional, if you need to use icons) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>
</html>
