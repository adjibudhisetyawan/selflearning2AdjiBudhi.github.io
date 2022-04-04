<?php
    include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list database</title>
    <link rel="stylesheet" href="list.css?v=<?php echo time(); ?>">
</head>
<body>
    <h1 class="judul">LIST USER</h1>
    <div class="box">
        <table border="1" width="100%">
        <tr>
            <th>Foto</th>
            <th>Nama Depan</th>
            <th>Tgl Lahir</th>
            <th>Email</th>
            <th>Username</th>
            <th>Password1</th>
            <th>Password2</th>
        </tr>
        <!-- NAMA DEPAN -->
        <?php
            $str_query = "select*from user";
            $query = mysqli_query($connection, $str_query);
            
            while($data = mysqli_fetch_array($query)){
                echo "<tr>"; 
                $dir = "profile/". $data['username']."/images";
                    $open = opendir($dir);
                    while (($files = readdir($open)) != FALSE ){
                        if($files != "." && $files != ".." && $files != "Thumbs.db"){
                            echo "<td><img border='3' width='100' src='$dir/$files'></td>";
                        }
                    }
                echo "<td>".$data['nama_depan']."</td>";   
                echo "<td>".$data['tanggal_lahir']."</td>";  
                echo "<td>".$data['email']."</td>"; 
                echo "<td>".$data['username']."</td>";
                echo "<td>".$data['password1']."</td>"; 
                echo "<td>".$data['password2']."</td>";  
            }
        ?>
    </div>
</body>
</html>