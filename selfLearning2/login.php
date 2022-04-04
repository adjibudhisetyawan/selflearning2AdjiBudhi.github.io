<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="log.css?v=<?php echo time(); ?>">
    
</head>
<body>
    <div class="judul">
        Login
    </div>
    <div class="form-log">
        <form action="loginProcess.php" method="post">
            <div>
                Username
                <input type="text" name="username" id="username">
            </div>
            <div>
                Password
                <input type="password" name="password" id="password">
            </div>
            <div class="button">
                <div>
                    <input type="submit" name="submit" id="login-btn" style="display:none;">
                    <label for="login-btn" class="login-button">Login</label>
                </div>
                <div class="back-button">
                    <a href="index.php">Kembali</a>
                </div>
            </div>
        </form>
    </div>

    <!-- <script src="/main.js"></script> -->
</body>
</html>