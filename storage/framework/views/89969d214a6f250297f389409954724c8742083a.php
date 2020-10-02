<!DOCTYPE html>
<html>
<head>
	<title>Data Barang</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body style="background-color:orange">
	<div class="row">
		<div class="container">
			<h1 class="my-5 text-center">Data Barang</h1>

			<div class="text-left">
				<p>Untuk Menambah Data Barang</p>
				<a href="/tambah" class="btn btn-primary">Klik Disini</a>
			</div>
			<br/>
			<p>Untuk Cari Kata Kunci Nama Barang :</p>
			<form action="/cari" method="GET">
				<input type="text" name="cari" placeholder="Cari Nama Barang Disini" value="<?php echo e(old('cari')); ?>">
				<input type="submit" value="Cari">
			</form>
			<br/>
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th width="1%">File</th>
						<th>Keterangan</th>
						<th width="1%">Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barangs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><img width="150px" src="<?php echo e(url('/data_file/'.$barangs->foto_barang)); ?>"></td>
						<td>Nama Barang : <?php echo e($barangs->nama_barang); ?></br>Harga Beli : <?php echo e($barangs->harga_beli); ?></br>Harga Jual : <?php echo e($barangs->harga_jual); ?></br>Stok : <?php echo e($barangs->stok); ?></td>
						<td>
							<a class="btn btn-primary" href="/edit/<?php echo e($barangs->id); ?>">Edit</a>
							<a class="btn btn-danger" onclick="return confirm('Apakah kamu yakin hapus data ini?')" href="/hapus/<?php echo e($barangs->id); ?>">Delete</a>
						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html><?php /**PATH C:\Users\User\Documents\Nutech\resources\views/barang.blade.php ENDPATH**/ ?>