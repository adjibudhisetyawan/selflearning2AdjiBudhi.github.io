<?php
    session_start();
    include("config.php");
    if(isset($_POST['submit'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        if(empty($username) || empty($password)){
            echo "<script>";
                echo "alert('form tidak boleh kosong!')";
            echo "</script>";
                
            echo "<script>";
                echo "window.location='login.php'";
            echo "</script>";
        }else{
            $str_query = "select * from user where username='$username' and (password1='$password' or password2='$password')";
            $query = mysqli_query($connection, $str_query);
            $data = mysqli_fetch_array($query);

            if(empty($data)){
                echo "<script>";
                    echo "alert('Harap username dan password sesuai')";
                echo "</script>";
                
                echo "<script>";
                    echo "window.location='login.php'";
                echo "</script>";
            }else{
                $_SESSION['usernameSession'] = $username;
                $_SESSION['passwordSession'] = $password;
                echo "<script>";
                    echo "alert('Login Berhasil')";
                echo "</script>";
                
                echo "<script>";
                    echo "window.location='home.php'";
                echo "</script>";
            }
        }
    }
?>