<?php 
    $instansi = $_POST['instansi'];
    $deskripsi = $_POST['deskripsi'];

        $sql = "INSERT INTO `instansi` (`instansi`,`deskripsi`)
        VALUES ('$instansi','$deskripsi')";

        //echo $sql;
        mysqli_query($koneksi,$sql);
        $id = mysqli_insert_id($koneksi);

        header("Location:index.php?include=instansi&notif=tambahberhasil");
    

?>