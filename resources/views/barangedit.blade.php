<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Barang</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body style="background-color:orange">
	<div class="row">
		<div class="container">

			<h2 class="text-center my-5">Edit Data Barang</h2>
			<div class="text-left">
				<a href="/" class="btn btn-primary">Kembali</a>
			</div>
			<br/>

			<div class="col-lg-8 mx-auto my-5">	

				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif

				<form action="/update/{{$barang->id}}" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
					{{ method_field('PUT') }}		

					<div class="form-group">
						<b>File Gambar</b><br/>(Saat Ini : {{$barang->foto_barang}})<br/>
						<input type="file" name="foto_barang">
					</div>

					<div class="form-group">
						<b>Nama Barang</b>
						<textarea class="form-control" name="nama_barang">{{$barang->nama_barang}}</textarea>
					</div>

					<div class="form-group">
						<b>Harga Beli</b>
						<textarea class="form-control" name="harga_beli">{{$barang->harga_beli}}</textarea>
					</div>

					<div class="form-group">
						<b>Harga Jual</b>
						<textarea class="form-control" name="harga_jual">{{$barang->harga_jual}}</textarea>
					</div>

					<div class="form-group">
						<b>Stok</b>
						<textarea class="form-control" name="stok">{{$barang->stok}}</textarea>
					</div>

					<input type="submit" value="Upload" class="btn btn-primary">
				</form>
				
			</div>
		</div>
	</div>
</body>
</html>