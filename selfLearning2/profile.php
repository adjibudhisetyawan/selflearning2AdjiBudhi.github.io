<?php
    session_start();
    include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="home.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="navbar">
        <div class="judul">
            Aplikasi Pengelolaan Keuangan
        </div>
        <div class="nav-button">
            <div class="center">
                <a href="home.php">Home</a>
                <a href="profile.php" class="choosen">Profile</a>
                <a href="update.php">Update</a>
            </div>
            <a href="logout.php" class="logout">Logout</a>
        </div>
    </div>

    <div class="head">
        Profil Pribadi
    </div>
    <div class="isi">
        
        <div class="isi-content">
            Nama Depan
            <strong>
                <?php
                    $username = $_SESSION['usernameSession'];
                    $str_query = "select*from user where username='$username'";
                    $query = mysqli_query($connection, $str_query);
                
                    while($data = mysqli_fetch_array($query)){
                        echo $data['nama_depan'];    
                    }
                ?>
            </strong>
        </div>
        <div class="isi-content">
            Nama Tengah
            <strong>
                <?php
                    $username = $_SESSION['usernameSession'];
                    $str_query = "select*from user where username='$username'";
                    $query = mysqli_query($connection, $str_query);
                
                    while($data = mysqli_fetch_array($query)){
                        echo $data['nama_tengah'];    
                    }
                ?>
            </strong>
        </div>
        <div class="isi-content">
            Nama Belakang
            <strong>
                <?php
                    $username = $_SESSION['usernameSession'];
                    $str_query = "select*from user where username='$username'";
                    $query = mysqli_query($connection, $str_query);
                
                    while($data = mysqli_fetch_array($query)){
                        echo $data['nama_belakang'];    
                    }
                ?>
            </strong>
        </div>
        <div class="isi-content">
            Tempat Lahir
            <strong>
                <?php
                    $username = $_SESSION['usernameSession'];
                    $str_query = "select*from user where username='$username'";
                    $query = mysqli_query($connection, $str_query);
                
                    while($data = mysqli_fetch_array($query)){
                        echo $data['tempat_lahir'];    
                    }
                ?>
            </strong>
        </div>
        <div class="isi-content">
            Tgl Lahir
            <strong>
                <?php
                    $username = $_SESSION['usernameSession'];
                    $str_query = "select*from user where username='$username'";
                    $query = mysqli_query($connection, $str_query);
                
                    while($data = mysqli_fetch_array($query)){
                        echo $data['tanggal_lahir'];    
                    }
                ?>
            </strong>
        </div>
        <div class="isi-content">
            NIK
            <strong>
                <?php
                    $username = $_SESSION['usernameSession'];
                    $str_query = "select*from user where username='$username'";
                    $query = mysqli_query($connection, $str_query);
                
                    while($data = mysqli_fetch_array($query)){
                        echo $data['nik'];    
                    }
                ?>
            </strong>
        </div>
        <div class="isi-content">
            Warga Negara
            <strong>
                <?php
                    $username = $_SESSION['usernameSession'];
                    $str_query = "select*from user where username='$username'";
                    $query = mysqli_query($connection, $str_query);
                
                    while($data = mysqli_fetch_array($query)){
                        echo $data['warga_negara'];    
                    }
                ?>
            </strong>
        </div>
        <div class="isi-content">
            Email
            <strong>
                <?php
                    $username = $_SESSION['usernameSession'];
                    $str_query = "select*from user where username='$username'";
                    $query = mysqli_query($connection, $str_query);
                
                    while($data = mysqli_fetch_array($query)){
                        echo $data['email'];    
                    }
                ?>
            </strong>
        </div>
        <div class="isi-content">
            No HP
            <strong>
                <?php
                    $username = $_SESSION['usernameSession'];
                    $str_query = "select*from user where username='$username'";
                    $query = mysqli_query($connection, $str_query);
                
                    while($data = mysqli_fetch_array($query)){
                        echo $data['no_hp'];    
                    }
                ?>
            </strong>
        </div>
        <div class="isi-content">
            Alamat
            <strong>
                <?php
                    $username = $_SESSION['usernameSession'];
                    $str_query = "select*from user where username='$username'";
                    $query = mysqli_query($connection, $str_query);
                
                    while($data = mysqli_fetch_array($query)){
                        echo $data['alamat'];    
                    }
                ?>
            </strong>
        </div>
        <div class="isi-content">
            Kode Pos
            <strong>
                <?php
                    $username = $_SESSION['usernameSession'];
                    $str_query = "select*from user where username='$username'";
                    $query = mysqli_query($connection, $str_query);
                
                    while($data = mysqli_fetch_array($query)){
                        echo $data['kode_pos'];    
                    }
                ?>
            </strong>
        </div>
        <div class="isi-content">
            Foto Profil
            <?php
                $username = $_SESSION['usernameSession'];
                $str_query = "select*from user where username='$username'";
                $query = mysqli_query($connection, $str_query);
                while($data = mysqli_fetch_array($query)){
                    $dir = "profile/". $data['username']."/images";
                        $open = opendir($dir);
                        while (($files = readdir($open)) != FALSE ){
                            if($files != "." && $files != ".." && $files != "Thumbs.db"){
                                echo "<img border='3' height='200'src='$dir/$files'>";
                            }
                        }
                }
            ?>
        </div>
    </div>
</body>
</html>