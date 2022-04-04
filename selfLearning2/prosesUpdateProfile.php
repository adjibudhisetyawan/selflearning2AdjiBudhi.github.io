<?php
    include("config.php");

    if(isset($_POST['submit'])){
        
        $username = $_POST['username'];
        $str_check = "select*from user where username='$username'";
        $query_check = mysqli_query($connection, $str_check);
        $data = mysqli_fetch_array($query_check);

        // echo $data['password1'];
        //hapus file lama
        $directory = "./profile/$username/images/".$data['foto_profil'];
        // print_r($_FILES);
        // echo $directory;
        $test = unlink($directory);
        
        $fileName = $_FILES['foto']['name'];
        $tempName = $_FILES['foto']['tmp_name'];
        $fileType = $_FILES['foto']['type'];
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
        }else if(empty($_POST['password1'])){
            echo "<script>alert('Password 1 masih kosong'); window.history.back();</script>";
        }else if(empty($_POST['password2'])){
            echo "<script>alert('Password 2 masih kosong'); window.history.back();</script>";
        }else{
            
            $dir = "./profile/$username/images";
            mkdir($dir, 0777, true);
            move_uploaded_file($tempName, "profile/$username/images/$fileName");
            $str_query = "update user set nama_depan='".$_POST['nama-depan']."' , nama_tengah='".$_POST['nama-tengah']."', 
            nama_belakang='".$_POST['nama-belakang']."', tempat_lahir='".$_POST['tempat-lahir']."', tanggal_lahir='".$_POST['tgl-lahir']."',
            nik='".$_POST['nik']."', warga_negara='".$_POST['warga-negara']."', email='".$_POST['email']."', 
            no_hp='".$_POST['no-hp']."', alamat='".$_POST['alamat']."', kode_pos='".$_POST['kode-pos']."', foto_profil='".$fileName."',
            password1='".$_POST['password1']."', password2='".$_POST['password2']."' where username='".$_POST['username']."' ";
            $query = mysqli_query($connection, $str_query);
            if($query){
                echo "<script>";
                    echo "alert('Data berhasil diupdate')";
                echo "</script>";
                        
                echo "<script>";
                    echo "window.location='logout.php'";
                echo "</script>"; 
            }else{
                echo "<script>";
                    echo "alert('Data gagal diupdate')";
                echo "</script>";
                        
                echo "<script>";
                    echo "window.location='home.php'";
                echo "</script>";
            }
        }
    }
?>