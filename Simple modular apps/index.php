<?php
session_start();
include("koneksi/koneksi.php");

if(isset($_GET["include"])){
$include = $_GET["include"];
if($include=="konfirmasi-login"){
    include("include/konfirmasilogin.php");
}else if($include=="log-out"){
    include("include/logout.php");
}else if($include=="konfirmasi-tambah-instansi"){
    include("include/konfirmasi_tambah_instansi.php");
}else if($include=="konfirmasi-edit-instansi"){
    include("include/konfirmasi_edit_instansi.php");
}    
}
?>

<!DOCTYPE html>
<link rel="stylesheet" href="assets/css/style.css">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/demo/demo.css" rel="stylesheet" />
    <title>Simple Modular App</title>
</head>
<body>
<div>
        <?php 
        if(isset($_GET["include"])){
            $include = $_GET["include"];

            if($include=="instansi"){
                    include("include/instansi.php");
                }else if($include=="tambah-instansi"){
                    include("include/tambah_instansi.php");
                }else if($include=="edit-instansi"){
                    include("include/edit_instansi.php");
                }else if($include=="profile"){
                include("include/profile.php");
                } 
                }else{
                    include("include/login.php");
                }
        ?>
    </div>
 
</body>    
</html>