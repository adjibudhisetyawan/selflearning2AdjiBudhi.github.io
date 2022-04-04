<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="reg.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="judul">
        Register
    </div>
    <div class="form-reg">
        <form action="registerProcess.php" method="post" enctype="multipart/form-data" >
            <div>
                Nama Depan
                <input type="text" name="nama-depan">
            </div>
            <div>
                Nama Tengah
                <input type="text" name="nama-tengah">
            </div>
            <div>
                Nama Belakang
                <input type="text" name="nama-belakang">
            </div>
            <div>
                Tempat Lahir
                <input type="text" name="tempat-lahir">
            </div>
            <div>
                Tgl Lahir
                <input type="date" name="tgl-lahir">
            </div>
            <div>
                NIK
                <input type="text" name="nik">
            </div>
            <div>
                Warga Negara
                <input type="text" name="warga-negara">
            </div>
            <div>
                Email
                <input type="text" name="email">
            </div>
            <div>
                No HP
                <input type="text" name="no-hp">
            </div>
            <div class="almt">
                Alamat
                <input type="text" name="alamat">
            </div>
            <div>
                Kode Pos
                <input type="text" name="kode-pos">
            </div>
            <div class="file-input">
                Foto Profil
                <input type="file" name="foto" id="choose" style="display:none;">
                <label for="choose" class="lbl">Silahkan Pilih Foto</label>                
            </div>
            <div>
                Username
                <input type="text" name="username">
            </div>
            <div>
                Password 1
                <input type="password" name="password1">
            </div>
            <div>
                Password 2
                <input type="password" name="password2">
            </div>
            <div class="back-button">
                <a href="index.php">Kembali</a>
            </div>
            <div>
                <input type="submit" name="submit" id="submit-btn" style="display:none;">
                <label for="submit-btn" class="submit-button">Register</label>
            </div>
        </form>
    </div>
</body>
</html>
