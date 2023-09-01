<?php
if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
    $instansi = $_POST['instansi'];
    $deskripsi = $_POST['deskripsi'];
} 

$sql = "UPDATE `instansi` set 
`instansi`='$instansi',`deskripsi`='$deskripsi'
WHERE `id`='$id'";
mysqli_query($koneksi,$sql);

header("Location:index.php?include=instansi&notif=editberhasil");
?>