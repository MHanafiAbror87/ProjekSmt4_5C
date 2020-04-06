<?php $this->load->view('admin/head') ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php $this->load->view('admin/header') ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('admin/leftbar') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
<div class="box">
  <div class="box-header">
    <div class="col-md-6" style="padding: 0;">
    <div class="col-md-3">
        </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
    <form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post">
    <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username" placeholder="Enter username">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>
  <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" name="nama_user" placeholder="Enter Nama">
  </div>
  <div class="form-group">
    <label>Role</label>
    <input type="text" class="form-control" name="role" placeholder="Enter Role">
  </div>
<button type="submit" class="btn btn-primary">Tambah</button>
	</form>	
    </table>
    
  </div>
</div>

</div>

