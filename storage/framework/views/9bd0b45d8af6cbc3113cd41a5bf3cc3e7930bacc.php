<!DOCTYPE html>
<html>
<head>
	<title>Data Barang</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body style="background-color:orange">
	<div class="row">
		<div class="container">

			<h2 class="text-center my-5">Tambah Data Barang</h2>
			<div class="text-left">
				<a href="/" class="btn btn-primary">Kembali</a>
			</div>
			<div class="col-lg-8 mx-auto my-5">	

				<?php if(count($errors) > 0): ?>
				<div class="alert alert-danger">
					<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php echo e($error); ?> <br/>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
				<?php endif; ?>

				<form action="/proses" method="POST" enctype="multipart/form-data">
					<?php echo e(csrf_field()); ?>


					<div class="form-group">
						<b>File Gambar</b><br/>
						<input type="file" name="foto_barang">
					</div>

					<div class="form-group">
						<b>Nama Barang</b>
						<textarea class="form-control" name="nama_barang"></textarea>
					</div>

					<div class="form-group">
						<b>Harga Beli</b>
						<textarea class="form-control" name="harga_beli"></textarea>
					</div>

					<div class="form-group">
						<b>Harga Jual</b>
						<textarea class="form-control" name="harga_jual"></textarea>
					</div>

					<div class="form-group">
						<b>Stok</b>
						<textarea class="form-control" name="stok"></textarea>
					</div>

					<input type="submit" value="Upload" class="btn btn-primary">
				</form>
				
			</div>
		</div>
	</div>
</body>
</html><?php /**PATH C:\Users\User\Documents\Nutech\resources\views/barangtambah.blade.php ENDPATH**/ ?>