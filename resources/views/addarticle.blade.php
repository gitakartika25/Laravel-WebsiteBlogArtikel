<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="starter-template" style="margin-bottom: 15px;">
        <h3>Tambah Artikel</h3><br>
        <a href="{{ route('manage') }}" class="btn btn-outline-info">< Kembali ke Kelola Artikel</a>
    </div>
	<div class="container">
			<form action="/article/create" method="post" enctype="multipart/form-data">
				{{csrf_field()}}
		 		<div class="form-group">
			 		<label for="title">Judul</label>
			 		<input type="text" class="form-control"
					required="required" name="title"></br>
			 		</div>
			 		<div class="form-group">
			 		<label for="content">Content</label>
			 		<input type="text" class="form-control"
					required="required" name="content"></br>
			 		</div>
			 		<div class="form-group">
					<label for="image">Feature Image</label>
			 		<input type="file" class="form-control"
					required="required" name="featured_image"></br>
		 		</div>
		 		<button type="submit" name="add" class="btn btn-primary btn-lg btn-block">Tambah Data</button>

		 		<form action="/article/create" method="post"
enctype="multipart/form-data">
		 	</form>
	</div>
	
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>
</html>