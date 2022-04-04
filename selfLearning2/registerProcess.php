<?php
    include("config.php");
    if(isset($_POST['submit'])){

        $username = $_POST['username']; //buat cek username yg lain di database, soalnya gk bole sama
        $fileName = $_FILES['foto']['name'];
        $tempName = $_FILES['foto']['tmp_name'];
        $fileType = $_FILES['foto']['type'];

        //buat dapetin data nya ada / nggk di database
        $check_query = "select * from user where username='$username'";
        $check = mysqli_query($connection, $check_query);
        $data = mysqli_fetch_array($check);

        //validasi form harus terisi semua dan sesuai format
        if(empty($_POST['nama-depan'])){
            echo "<script>alert('Nama depan masih kosong'); window.history.back();</script>";
        }else if(empty($_POST['nama-tengah'])){
            echo "<script>alert('Nama tengah masih kosong'); window.history.back();</script>";
        }else if(empty($_POST['nama-belakang'])){
            echo "<script>alert('Nama belakang masih kosong'); window.history.back();</script>";
        }else if(empty($_POST['tempat-lahir'])){
            echo "<script>alert('Tempat lahir masih kosong'); window.history.back();</script>";
        }else if(empty($_POST['tgl-lahir'])){
            echo "<script>alert('Tanggal Lahir masih kosong'); window.history.back();</script>";
        }else if(empty($_POST['nik'])){
            echo "<script>alert('NIK masih kosong'); window.history.back();</script>";
        }else if(empty($_POST['warga-negara'])){
            echo "<script>alert('Warga Negara masih kosong'); window.history.back();</script>";
        }else if(empty($_POST['email'])){
            echo "<script>alert('Email masih kosong'); window.history.back();</script>";
        }else if(empty($_POST['no-hp'])){
            echo "<script>alert('No HP masih kosong'); window.history.back();</script>";
        }else if(empty($_POST['alamat'])){
            echo "<script>alert('Alamat masih kosong'); window.history.back();</script>";
        }else if(empty($_POST['kode-pos'])){
            echo "<script>alert('Kode Pos masih kosong'); window.history.back();</script>";
        }else if(empty($fileName)){
            echo "<script>alert('Foto profil masih kosong'); window.history.back();</script>";
        }else if(empty($_POST['username'])){
            echo "<script>alert('Username masih kosong'); window.history.back();</script>";
        }else if(empty($_POST['password1'])){
            echo "<script>alert('Password 1 masih kosong'); window.history.back();</script>";
        }else if(empty($_POST['password2'])){
            echo "<script>alert('Password 2 masih kosong'); window.history.back();</script>";
        }else{
            //form udah keisi semua
            //cek tipe file, klo bener baru masukin database
            if($fileType == "image/jpg" || $fileType == "image/png" || $fileType == "image/jpeg"){
                if(empty($data)){
                    $directory = "./profile/$username/images";
                    mkdir($directory, 0777, true);
                    move_uploaded_file($tempName, "profile/$username/images/$fileName");
                    $str_query = "insert into user value('".$_POST['nama-depan']."', '".$_POST['nama-tengah']."', '".$_POST['nama-belakang']."',
                    '".$_POST['tempat-lahir']."', '".$_POST['tgl-lahir']."', '".$_POST['nik']."', '".$_POST['warga-negara']."', 
                    '".$_POST['email']."', '".$_POST['no-hp']."', '".$_POST['alamat']."', '".$_POST['kode-pos']."', 
                    '".$fileName."', '".$_POST['username']."', '".$_POST['password1']."', '".$_POST['password2']."')";
                    $query = mysqli_query($connection, $str_query);
                    if($query){
                        echo "<script>";
                            echo "alert('Data berhasil ditambahkan')";
                        echo "</script>";
                        
                        echo "<script>";
                            echo "window.location='index.php'";
                        echo "</script>"; 
                    }else{
                        echo "<script>";
                            echo "alert('Data gagal ditambahkan')";
                        echo "</script>";
                        
                        echo "<script>";
                            echo "window.location='register.php'";
                        echo "</script>";
                    }
                }else{
                    echo "<script>";
                        echo "alert('Username sudah ada')";
                    echo "</script>";
                        
                    echo "<script>";
                        echo "window.history.back()";
                    echo "</script>";
                }
            }else{
                echo "<script>";
                    echo "alert('Pastikan format file berupa jpeg/jpg/png')";
                echo "</script>";
                        
                echo "<script>";
                    echo "window.history.back()";
                echo "</script>";
            }
        }


    }
?>
