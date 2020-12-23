<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-3">
	<div class="card">
		<div class="card-header">
			TAMBAH DATA
		</div>
	<div class="card-body">
    <form action="/save" method="POST" >
	{{csrf_field()}}
			<div class="form-group">
				<label>NIS</label>
	            <input type="text" class="form-control" name="nis">
			</div>
			<div class="form-group">
				<label>Nama</label>
	            <input type="text" class="form-control" name="nama">
			</div>
			<div class="form-group">
				<label>Alamat</label>
	            <input type="text" class="form-control" name="alamat">
			</div>
			<div class="form-group">
				<label>Kelas</label>
	            <input type="text" class="form-control" name="kelas">
			</div>
			<div>
				<input type="submit" class="btn btn-primary" required value="Tambah">
			</div>
		</form>
		</div>
	</div>
</body>
</html>