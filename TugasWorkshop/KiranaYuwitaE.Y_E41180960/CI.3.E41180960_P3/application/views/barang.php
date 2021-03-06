<div class="content-wrapper">
<section class="content-header">
	<h1>
		Data Produk
		<small>Control Panel</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href=""><i class="fa fa-box"></i>Home</a></li>
		<li class="active">Data Produk</li>
	</ol>
</section>

<section class="content">
	<table class="table">
	<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data Produk</button>
		<tr>
			<th>NO</th>
			<th>Nama Produk</th>
			<th>Harga</th>
			<th>Stok Produk</th>
			<th colspan="2">Aksi</th> 
		</tr>
		<?php $nomor=1;
		foreach ($barang as $brg): ?> 
		<tr>
			<td><?php echo $nomor++;?></td>
			<td><?php echo $brg->nama_barang ?></td>
			<td><?php echo $brg->harga ?></td>
			<td><?php echo $brg->stok ?></td>
			<td onclick="javascript: return confirm('Hapus Data ini?')"><?php echo anchor('Barang/hapus/'.$brg->id_barang, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
			<td><?php echo anchor('Barang/edit/'.$brg->id_barang, '<div class="btn btn-danger btn-sm"><i class="fa fa-edit"></i></div>') ?> </td>
		</tr>
	<?php endforeach; ?>
	</table>
</section>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Data Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <form method="post" action="<?php echo base_url('barang/tambah_aksi');?>">
     	<div class="form-group">
     		<label>Nama Barang</label>
     		<input type="text" name="nama_barang" class="form-control">
     	</div>
     	<div class="form-group">
     		<label>Harga Barang</label>
     		<input type="text" name="harga" class="form-control">
     	</div>
     	<div class="form-group">
     		<label>Stok Barang</label>
     		<input type="text" name="stok" class="form-control">
     	</div>
     	<button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
     </form>
      </div>
      </div>
    </div>
  </div>
</div>