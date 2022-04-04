<?php
    include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="judul">
        Aplikasi Pengelolaan Keuangan
    </div>
    <div class="box">
        <div class="header-box">
            Selamat Datang di Aplikasi Pengelolaan Keuangan
        </div>
        <div class="button">
            <a href="login.php" class="login">Login</a>
            <a href="register.php" class="regis">Register</a>
            <a href="list.php" class="login">List</a>
        </div>
    </div>
</body>
</html>