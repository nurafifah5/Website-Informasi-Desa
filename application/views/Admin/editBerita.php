<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard Admin - Desa Mojorejo</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>Assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url();?>Assets/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>Assets/css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <div id="wrapper">

   <!-- Sidebar -->
   <ul class="sidebar navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo base_url();?>C_Admin/ShowDashboardAdmin">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
      </a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo base_url();?>C_Admin/ShowHalamanBerita">
        <i class="fas fa-fw fa-newspaper"></i>
        <span>Berita Desa</span>
      </a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo base_url();?>C_Artikel/ShowHalamanArtikel">
        <i class="fas fa-fw fa-book"></i>
        <span>Artikel Desa</span>
      </a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo base_url();?>C_APBD/ShowHalamanApbd">
        <i class="fas fa-fw fa-cart-plus"></i>
        <span>APBD</span>
      </a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo base_url();?>C_Galeri/ShowHalamanGaleri">
        <i class="fas fa-fw fa-file-image"></i>
        <span>Gambar</span>
      </a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo base_url();?>C_Umkm/ShowHalamanUmkm">
        <i class="fas fa-fw fa-industry"></i>
        <span>UMKM</span>
      </a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo base_url();?>C_Organisasi/ShowHalamanOrganisasi">
        <i class="fas fa-fw fa-users"></i>
        <span>Organisasi</span>
      </a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo base_url();?>C_PerangkatDesa/ShowHalamanPerangkatDesa">
        <i class="fas fa-fw fa-handshake"></i>
        <span>Perangkat Desa</span>
      </a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo base_url();?>C_Demografis/ShowHalamanDemografis">
        <i class="fas fa-fw fa-home"></i>
        <span>Demografis Warga</span>
      </a>
    </li>

    <li class="nav-item active">
      <a class="nav-link" href="<?php echo base_url();?>C_Kontak/ShowHalamanKontak">
        <i class="fas fa-fw fa-phone"></i>
        <span>Kontak</span>
      </a>
    </li>


  </ul>
  <!--end of Sidebar-->

  <div id="content-wrapper">

    <div class="container-fluid">

      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a ><center>Edit Berita</center></a>
        </li>

      </ol>

      <?php 
      $no=1;
      if (is_array($berita) || is_object($berita)){
       foreach ($berita as $b){ ?>

        <form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>C_Berita/edit?id_berita=<?php echo $b->id_berita?>">
          <p>Judul Berita : </p>
          <div class="form-group">
            <input class="form-control" name="judul_berita" id="judul_berita" type="text"  required="required" value="<?php echo $b->judul_berita ?>">
            <p class="help-block text-danger"></p>
          </div>
          <p>Penulis Berita : <?php echo $b->nama_penulis ?></p>
          <p>Isi Berita : </p>
          <div class="form-group">

            <textarea class="form-control" name="isi_berita" id="isi_berita" required="required" ><?php echo $b->isi_berita?></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <p>Foto Berita : </p>
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a >Upload ulang foto, jika tidak maka berita tidak memiliki foto!</a>
            </li>

          </ol>
          <div class="form-group">
            <input type="file" id="foto_berita" name="foto_berita" value="<?php echo $b->foto_berita ?>" required="required">

            <p class="help-block text-danger"></p>
          </div>
          <div class="form-group">
            <label>Status</label>
            <select name="status" id="status" required="">
              <option value="terbit" <?php if($b->status == "terbit") { echo "SELECTED"; } ?>>Terbit</option>
              <option value="pending" <?php if($b->status == "pending") { echo "SELECTED"; } ?>>Pending</option>
              <option value="revisi" <?php if($b->status == "revisi") { echo "SELECTED"; } ?>>Revisi</option>
            </select>
          </div>
          <div class="col-lg-12 text-center">
            <div id="success"></div>
            <button  class="btn btn-primary btn-xl text-uppercase" type="submit">Simpan Pembaruan</button>
          </div>
          
        </form>
      <?php } } ?>
    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url();?>Assets/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>Assets/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url();?>Assets/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?php echo base_url();?>Assets/chart.js/Chart.min.js"></script>
  <script src="<?php echo base_url();?>Assets/datatables/jquery.dataTables.js"></script>
  <script src="<?php echo base_url();?>Assets/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url();?>Assets/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="<?php echo base_url();?>Assets/js/demo/datatables-demo.js"></script>
  <script src="<?php echo base_url();?>Assets/js/demo/chart-area-demo.js"></script>

</body>

</html>
