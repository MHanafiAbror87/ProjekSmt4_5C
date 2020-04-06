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
    <?php foreach($user as $u){ ?>
    <form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
    <input type="hidden" name="id" value="<?php echo $u->id ?>">
    <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username" value="<?php echo $u->username ?>" placeholder="Enter username">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" value="<?php echo $u->password ?>" placeholder="Password">
  </div>
  <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" name="nama_user" value="<?php echo $u->nama_user ?>" placeholder="Enter Nama">
  </div>
  <div class="form-group">
    <label>Role</label>
    <input type="text" class="form-control" name="role"  value="<?php echo $u->role ?>" placeholder="Enter Role">
  </div>
<button type="submit" class="btn btn-primary">Simpan</button>
	</form>	
    </table>
    
	<?php } ?>
  </div>
</div>

</div>

