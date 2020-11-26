<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{asset('css/blog-home.css')}}" rel="stylesheet">
</head>
<body>
<!--  -->

<div class="starter-template" style="margin-bottom: 10px;">
        <h1>Kelola Artikel</h1>
    </div>

    <div class="starter-template" style="margin-bottom: 15px;">
        <a href="{{ route('home_uts') }}" class="btn btn-outline-info">< Kembali ke Halaman Utama</a>
    </div>

<div class="container">
        <div class="row">
	<a href="/addarticle" class="btn btn-primary">Tambah Data</a>
	  <a href="/articles/cetak_pdf" class="btn btn-success float-right" target="_blank">CETAK PDF</a><br><br>

		<table class="table table-bordered table-striped">
			<thead>
				<tr>	
					<th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Gambar</th>
                <th scope="col">Tanggal</th>
                <th scope="col center" colspan="2" style="text-align: center;">Aksi</th>
				</tr>
			</thead>
			<tbody>
				 @if($articles->isEmpty())
            <td colspan="5" class="text-center">Tidak ada data yang ditampilkan</td>
            @else
            @foreach($articles AS $a)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $a->title }}</td>
                <td>
                    <img src="{{ asset('storage/'.$a->featured_image) }}" alt="{{ $a->featured_image }}" width="50" height="50">
                </td>
                <td>{{ $a->updated_at }}</td>
                <td><a href="article/edit/{{ $a->id }}" class="badge badge-warning">Edit</a></td>
                <td><a href="article/delete/{{ $a->id }}" class="badge badge-danger" onclick="return confirm('Hapus artikel  `{{ $a->title }}`')">Hapus</a></td>
            </tr>
            @endforeach
            @endif
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
