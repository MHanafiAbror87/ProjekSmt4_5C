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
            
    <div class="col-md-3"><button type="submit" class="btn btn-primary ">
    <?php echo site_url('crud/tambah','Tambah Data'); ?></button>
        </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
        <th>No</th>
			<th>Username</th>
			<th>Password</th>
			<th>Nama</th>
			<th>Role</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
      </thead>
      <tbody>
      <?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->username ?></td>
			<td><?php echo $u->password ?></td>
			<td><?php echo $u->nama_user ?></td>
			<td><?php echo $u->role ?></td>
			<td>
            <button type="submit" class="btn btn-success ">    
			      <?php echo anchor('crud/edit/'.$u->id,'Edit'); ?></button>
                  <button type="submit" class="btn btn-danger" > 
                              <?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
      </tbody>
    </table>
    
  </div>
</div>

</div>

