<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{asset('css/blog-home.css')}}" rel="stylesheet">
</head>
<body>
<!--  -->
<div class="container">
        <div class="row">
	<a href="/addarticle" class="btn btn-primary">Tambah Data</a>
		<table class="table table-bordered table-striped">
			<thead>
				<tr>	
					<th>No</th>
					<th>Judul</th>
					<th>Tanggal</th>
				</tr>
			</thead>
			<tbody>
				@foreach($articles as $a)
				<tr>
					<td>{{$a->id}}</td>
					<td>{{$a->title}}</td>
		 			<td>{{$a->created_at}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
        </div>
        <!-- /.row -->
    </div>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>
</html>
