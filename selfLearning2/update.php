<?php
    include("config.php");
    session_start();
    $username = $_SESSION['usernameSession'];
    $str_query = "select*from user where username='$username'";
    $query = mysqli_query($connection, $str_query);
    $data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link rel="stylesheet" href="reg.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="judul">
        Update Profile
    </div>

    <div class="form-reg">
        <form action="prosesUpdateProfile.php" method="post" enctype="multipart/form-data" >
            <div>
                Nama Depan
                <input type="text" name="nama-depan" value="<?php echo $data['nama_depan']?>">
            </div>
            <div>
                Nama Tengah
                <input type="text" name="nama-tengah" value="<?php echo $data['nama_tengah']?>">
            </div>
            <div>
                Nama Belakang
                <input type="text" name="nama-belakang" value="<?php echo $data['nama_belakang']?>">
            </div>
            <div>
                Tempat Lahir
                <input type="text" name="tempat-lahir" value="<?php echo $data['tempat_lahir']?>">
            </div>
            <div>
                Tgl Lahir
                <input type="date" name="tgl-lahir" value="<?php echo $data['tanggal_lahir']?>">
            </div>
            <div>
                NIK
                <input type="text" name="nik" value="<?php echo $data['nik']?>" readonly>
            </div>
            <div>
                Warga Negara
                <input type="text" name="warga-negara" value="<?php echo $data['warga_negara']?>">
            </div>
            <div>
                Email
                <input type="text" name="email" value="<?php echo $data['email']?>">
            </div>
            <div>
                No HP
                <input type="text" name="no-hp" value="<?php echo $data['no_hp']?>">
            </div>
            <div class="almt">
                Alamat
                <input type="text" name="alamat" value="<?php echo $data['alamat']?>">
            </div>
            <div>
                Kode Pos
                <input type="text" name="kode-pos" value="<?php echo $data['kode_pos']?>">
            </div>
            <div class="file-input">
                Foto Profil
                <input type="file" name="foto" id="choose" style="display:none;">
                <label for="choose" class="lbl">Ganti Foto</label>
                
                
                <!-- <label for="choose" class="lbl">Silahkan Pilih Foto</label>              -->
                   
            </div>
            
            <div>
                Username
                <input type="text" name="username" value="<?php echo $data['username']?>" readonly>
            </div>
            <div>
                Password 1
                <input type="text" name="password1" value="<?php echo $data['password1']?>">
            </div>
            <div>
                Password 2
                <input type="text" name="password2" value="<?php echo $data['password2']?>">
            </div>
            <div class="back-button">
                <a href="home.php">Kembali</a>
            </div>
            <div>
                <input type="submit" name="submit" id="submit-btn" style="display:none;">
                <label for="submit-btn" class="submit-button">Update</label>
            </div>
        </form>
    </div>
</body>
</html>