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
                <div class="col-md-8"><h4><i class="fa fa-angle-right"></i>Formulir Tambah Instansi</h4>
            <br>
            <form class="cmxform form-horizontal style-form" id="commentForm" enctype="multipart/form-data" method="post" action="index.php?include=konfirmasi-tambah-instansi" >
            <div class="col-md-14">
              <div class="form-group">
                <label >Instansi</label>
                <input type="text" class="form-control" name="instansi" id="instansi" placeholder="Masukkan instansi" require/>
              </div>
            </div>
            <div class="col-md-14">
              <div class="form-group">
                <label >Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="editor1" cols="30" rows="30" placeholder="Masukkan deskripsi singkat tentang instansi"></textarea>
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

        <!-- /row -->
    <!--main content end-->
    <?php include("includes/script.php") ?> 