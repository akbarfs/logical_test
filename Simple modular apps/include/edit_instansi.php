<?php
if(isset($_GET['data'])){
$id = $_GET['data'];
$_SESSION['id']=$id;

$sql_k = "SELECT `instansi`,`deskripsi` FROM `instansi` WHERE `id`='$id'";
$query_k = mysqli_query($koneksi,$sql_k);
while($data_k = mysqli_fetch_row($query_k)){
    $instansi = $data_k[0];
    $deskripsi = $data_k[1];
}
}
?>

        <div id="page-content-wrapper" >
        <?php include("includes/header.php") ?> 

    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->

    <div class="content" style="margin-left:5%;margin-right:5%;">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
            <div class="card card-user">
            <div class="content-panel">
                <div class="col-md-8"><h4><i class="fa fa-angle-right"></i>Formulir Edit Instansi</h4>
            <br>
            <form class="cmxform form-horizontal style-form" id="commentForm" enctype="multipart/form-data" method="post" action="index.php?include=konfirmasi-edit-instansi" >
            <div class="col-md-14">
            <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>
            <?php if($_GET['notif']=="editkosong"){?>
                <div class="alert alert-danger" role="alert">Maaf data 
                <?php echo $_GET['jenis'];?> wajib di isi</div>
            <?php }?>
            <?php }?>
              <div class="form-group">
                <label >instansi</label>
                <input type="text" class="form-control" name="instansi" id="instansi" value="<?php echo $instansi;?>" require/>
              </div>
            </div>
            <div class="col-md-14">
              <div class="form-group">
                <label >Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="editor1"><?php echo $deskripsi;?></textarea>
              </div>
            </div><hr>
            <button class="btn btn-primary" type="submit">Simpan</button>
            <button class="btn btn-theme"><a href="index.php?include=instansi">Kembali</a></button>

            </div>
            </form>
            </div>
            <!-- /content-panel -->
            </div>
  </div>
  </div>

        <!-- /row -->
    <!--main content end-->
    <?php include("includes/script.php") ?> 
