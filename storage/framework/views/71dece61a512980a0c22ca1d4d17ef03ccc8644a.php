<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<body>
	<div class="container mt-3">
    
	<div class="card">
		<div class="card-header">
			EDIT
		</div>
		<div class="card-body">
		<form action="/edit" method="POST">
		<?php echo e(csrf_field()); ?>

			<div class="form-group">
				<label>NIS</label>
	            <input type="text" class="form-control" name="nis" required value="">
			</div>
			<div class="form-group">
				<label>Nama</label>
	            <input type="text" class="form-control" name="nama" required value="">
			</div>
			<div class="form-group">
				<label>Alamat</label>
	            <input type="text" class="form-control" name="alamat" required value="">
			</div>
			<div class="form-group">
				<label>Kelas</label>
	            <input type="text" class="form-control" name="kelas" required value="">
			</div>
			<div>
				<input type="submit" class="btn btn-primary" required value="Edit">
			</div>
		</form>
        
		</div>
	</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\self_care\resources\views/edit.blade.php ENDPATH**/ ?>